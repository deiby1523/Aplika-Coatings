<?php

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
if(!isset($_POST['busqueda'])) {
    $_POST['busqueda'] = "";
}
if($_POST['busqueda'] != '') {

    $busqueda = $_POST['busqueda'];
    $consulta = "SELECT * FROM clientes Where (nombre LIKE '%$busqueda%') OR (nit LIKE '%$busqueda%')";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        
            while ($cliente = mysqli_fetch_array( $resultado))
            {
            echo "<option value='". $cliente['nit'] ."'>". $cliente['nombre'] ."</option>";
            }
            ?>
		<!-- Cerrar la tabla ------------------------------------>
            <?php
			  
    } else {
    echo "";
    }
} 
    

# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


?>