<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
$charset = mysqli_set_charset($conexion, "utf8");


if (isset($_POST['nit'])) {
    $nit = $_POST['nit'];
    $dv = $_POST['dv'];
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
$consulta = "INSERT INTO clientes VALUES (null,'$nit','$dv','$nombre','$tel','$correo','$dep','$ciudad','$dir')";
$clientes = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $clientes ) {
    header('location: cliente.php?msg=ok');
}
