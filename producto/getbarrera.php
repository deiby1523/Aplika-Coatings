<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
if(isset($_POST['marca']) && isset($_POST['tipo'])){
    $marca = $_POST['marca']; 
    $tipo = $_POST['tipo'];
    if ($tipo == '0'){
    
        $consulta = "SELECT * FROM productos Where (capa = 'barrera' OR capa = 'Autoimprimante' OR capa = 'Especial') AND marca = '$marca'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        if (mysqli_num_rows($resultado) > 0 ) {
            while ($producto = mysqli_fetch_array($resultado)) {

                ?>
                <option value='<?php echo $producto['referencia']; ?>'> <?php echo $producto['producto']; ?> - (<?php echo $producto['presentacion']; ?> GAL)</option>";
                <?php
            } 
            echo "<option> --------- Sin Barrera --------- </option>"; 
        } else {
        echo "";
        }

    }
    elseif ($tipo == "1") {
        $tipo = "barrera";
    } elseif ($tipo == "2") {
        $tipo = "Autoimprimante";
    } elseif ($tipo == "3") {
        $tipo = "Especial";
    }


    $marca = $_POST['marca'];

    $consulta = "SELECT * FROM productos Where capa = '$tipo' AND marca = '$marca'";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    if (mysqli_num_rows($resultado) > 0 ) {
        while ($producto = mysqli_fetch_array($resultado)) {
            
            ?>
            <option value='<?php echo $producto['referencia']; ?>'> <?php echo $producto['producto']; ?> - (<?php echo $producto['presentacion']; ?> GAL)</option>";
            <?php
        } 
        echo "<option> --------- Sin Barrera --------- </option>"; 
    } else {
    echo "";
    }
} else {
    echo "";
}


?>