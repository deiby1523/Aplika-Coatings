<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
if(isset($_POST['marca']) && isset($_POST['solidos'])){
    $solidos = $_POST['solidos'];
    if ($solidos == "1") {
        $min = 45;
        $max = 50;
    } elseif ($solidos == "2") {
        $min = 50;
        $max = 60;
    } elseif ($solidos == "3") {
        $min = 60;
        $max = 70;
    } elseif ($solidos == "4") {
        $min = 70;
        $max = 80;
    } elseif ($solidos == "5") {
        $min = 80;
        $max = 90;
    } elseif ($solidos == "6") {
        $min = 90;
        $max = 100;
    }


    $marca = $_POST['marca'];

    $consulta = "SELECT * FROM productos Where capa = 'imprimante' AND marca = '$marca' AND solidos >= $min AND solidos <= $max";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");   
    if (mysqli_num_rows($resultado) > 0 ) {
        while ($producto = mysqli_fetch_array($resultado)) {
            
            ?>
            <option value='<?php echo $producto['referencia']; ?>'> <?php echo $producto['producto']; ?></option>";
            <?php
        }
        echo "<option> --------- Sin Imprimación --------- </option>"; 
    } else {
    echo "";
    }
} else {
    echo "";
}



?>