<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
} else {
    header('location: cliente.php?msg=errorb');
}

# Añadir cliente ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "DELETE FROM clientes WHERE id='$id'";
$eliminar = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $eliminar ) {
    header('location: cliente.php?msg=okb');
}
