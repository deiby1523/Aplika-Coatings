<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
$charset = mysqli_set_charset($conexion, "utf8");


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
} else {
    header('location: usuario.php?msg=errorb');
}

# Añadir cliente ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "DELETE FROM user WHERE id='$id'";
$eliminar = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $eliminar ) {
    header('location: usuario.php?msg=okb');
}
