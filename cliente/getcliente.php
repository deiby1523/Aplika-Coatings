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
        
            ?>
            <table class='table table-hover' id='tabla_clientes' style='width: 94%; margin: 2%'>
		    <thead>
		    	<tr>
		    		<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>NIT</th>
		    		<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Cliente</th>
		    		<th style='text-align: center; vertical-align: middle;'>Telefono</th>
		    		<th style='text-align: center; vertical-align: middle;'>Correo</th>
		    		<th style='text-align: center; vertical-align: middle;'>Departamento</th>
		    		<th style='text-align: center; vertical-align: middle;'>Ciudad</th>
		    		<th style='text-align: center; vertical-align: middle;'>Dirección</th>
		    		<th style='text-align: center; vertical-align: middle;'>option</th>
		    	</tr>
		    </thead>
		    <tbody>

		<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		    <?php
            while ($cliente = mysqli_fetch_array( $resultado))
            {
            echo "<tr>";
            echo "<td>" . $cliente['nit'] ."-". $cliente['dv'] . "</td><td>" . $cliente['nombre'] . "</td><td>" . $cliente['celular'] . "</td><td>" . $cliente['correo'] . "</td><td>" . $cliente['departamento'] . "</td><td>" . $cliente['ciudad'] . "</td><td>" . $cliente['direccion'] . "</td><td><a href='editar_cliente.php?id=".$cliente['id']."'"." class='btn'><i class='fa-solid fa-pencil'></i></a><a href='eliminar_cliente.php?id=".$cliente['id']."'"." class='btn'><i class='fa-solid fa-trash-can'></i></a></td>";
            echo "</tr>";
            }
            ?>
		<!-- Cerrar la tabla ------------------------------------>
		    </tbody>
	        </table>
            <?php
			  
    } else {
    echo "No se ha encontrado el cliente";
    }
} else {
    $consulta = "SELECT * FROM clientes";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        
            ?>
            <table class='table table-hover' id='tabla_clientes' style='width: 94%; margin: 2%'>
		    <thead>
		    	<tr>
		    		<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>NIT</th>
		    		<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Cliente</th>
		    		<th style='text-align: center; vertical-align: middle;'>Telefono</th>
		    		<th style='text-align: center; vertical-align: middle;'>Correo</th>
		    		<th style='text-align: center; vertical-align: middle;'>Departamento</th>
		    		<th style='text-align: center; vertical-align: middle;'>Ciudad</th>
		    		<th style='text-align: center; vertical-align: middle;'>Dirección</th>
		    		<th style='text-align: center; vertical-align: middle;'>option</th>
		    	</tr>
		    </thead>
		    <tbody>

		<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		    <?php
            while ($cliente = mysqli_fetch_array( $resultado))
            {
            echo "<tr>";
            echo "<td>" . $cliente['nit'] ."-". $cliente['dv'] . "</td><td>" . $cliente['nombre'] . "</td><td>" . $cliente['celular'] . "</td><td>" . $cliente['correo'] . "</td><td>" . $cliente['departamento'] . "</td><td>" . $cliente['ciudad'] . "</td><td>" . $cliente['direccion'] . "</td><td><a href='editar_cliente.php?id=".$cliente['id']."'"." class='btn'><i class='fa-solid fa-pencil'></i></a><a href='eliminar_cliente.php?id=".$cliente['id']."'"." class='btn'><i class='fa-solid fa-trash-can'></i></a></td>";
            echo "</tr>";
            }
            ?>
		<!-- Cerrar la tabla ------------------------------------>
		    </tbody>
	        </table>
            <?php
    
}}

# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


?>