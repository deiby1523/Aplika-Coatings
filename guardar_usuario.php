<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $username = $_POST['username'];
    $password = $_POST['password'];

} else {
    header('location: usuario.php?msg=error');
}

# Añadir usuario ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "INSERT INTO user VALUES (null,'$nombre','$username', SHA2('$password',256), 'asesor')";
$usuario = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $usuario ) {
    header('location: usuario.php?msg=ok');
}
