<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
if(isset($_POST['marca']) && isset($_POST['base'])){
    $base = $_POST['base'];
    if ($base == "1") {
        $base = "ALQUIDICA";
    } elseif ($base == "2") {
        $base = "EPOXICA";
    } elseif ($base == "3") {
        $base = "POLIURETANO";
    } elseif ($base == "4") {
        $base = "ACRILICA";
    }


    $marca = $_POST['marca'];

    $consulta = "SELECT * FROM productos Where capa = 'acabado' AND marca = '$marca' AND resina = '$base'";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");   
    if (mysqli_num_rows($resultado) > 0 ) {
        while ($producto = mysqli_fetch_array($resultado)) {
            
            ?>
            <option value='<?php echo $producto['referencia']; ?>'> <?php echo $producto['producto']; ?></option>";
            <?php
        }
        echo "<option value=0> --------- Sin Acabado --------- </option>"; 
    } else {
    echo "";
    }
} else {
    echo "";
}



?>