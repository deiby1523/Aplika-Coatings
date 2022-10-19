<?php

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
if(isset($_POST['nit'])){
    $nit = $_POST['nit'];
    $consulta = "SELECT * FROM clientes Where nit = $nit";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        $empresa = mysqli_fetch_array($resultado);  
        echo $empresa['direccion'];
    } else {
    echo "No se ha encontrado el cliente";
    }
} else {
    echo "";
}

# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


?>