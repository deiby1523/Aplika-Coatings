<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");

if (isset($_POST['nit'])) {
    $nit = $_POST['nit'];
    $dig = $_POST['dig'];
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $dep = $_POST['dep'];
    $ciudad = $_POST['ciudad'];
    $dir = $_POST['dir'];

} else {
    header('location: cliente.php?msg=error');
}

# Añadir cliente ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "INSERT INTO clientes VALUES (null,'$nit','$nombre','$tel','$correo','$dep','$ciudad','$dir')";
$productos = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $productos ) {
    header('location: cliente.php?msg=ok');
}
