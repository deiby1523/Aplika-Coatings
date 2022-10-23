<?php


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");

if (isset($_POST['nit'])) {
    $id = $_POST['id'];
    $nit = $_POST['nit'];
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
$consulta = "UPDATE clientes SET nit = '$nit', nombre = '$nombre', celular ='$tel', correo = '$correo', departamento ='$dep', ciudad = '$ciudad', direccion ='$dir' WHERE id = '$id'";
$cliente = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $cliente ) {
    header('location: cliente.php?msg=oka');
} else {
    header('location: cliente.php?msg=errora');
}
