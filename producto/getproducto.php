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
    $consulta = "SELECT * FROM productos Where (producto LIKE '%$busqueda%') OR (referencia LIKE '%$busqueda%')";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        
            ?>
            <table class='table table-hover' id='tabla_productos' style='width: 94%; margin: 2%'>
		    <thead>
		    	<tr>
		    		<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Código</th>
		    		<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Producto</th>
		    		<th style='text-align: center; vertical-align: middle;'>Componentes</th>
		    		<th style='text-align: center; vertical-align: middle;'>Tipo</th>
		    		<th style='text-align: center; vertical-align: middle;'>Presentacion</th>
		    		<th style='text-align: center; vertical-align: middle;'>option</th>
		    	</tr>
		    </thead>
		    <tbody>

		<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		    <?php
            while ($producto = mysqli_fetch_array( $resultado))
            {
            echo "<tr>";
            echo "<td>" . $producto['referencia'] . "</td><td>" . $producto['producto'] . "</td><td>" . $producto['tipo'] . "</td><td>" . $producto['capa'] . "</td><td>" . $producto['presentacion'] . "</td><td><a href='editar_producto.php?id=".$producto['id']."'"." class='btn'><i class='fa-solid fa-pencil'></i></a><a href='eliminar_producto.php?id=".$producto['id']."'"." class='btn'><i class='fa-solid fa-trash-can'></i></a></td>";
            echo "</tr>";
            }
            ?>
		<!-- Cerrar la tabla ------------------------------------>
		    </tbody>
	        </table>
            <?php
			  
    } else {
    echo "No se ha encontrado el Producto";
    }
} else {
    $consulta = "SELECT * FROM productos LIMIT 100";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        
            ?>
            <table class='table table-hover' id='tabla_productos' style='width: 94%; margin: 2%'>
		    <thead>
		    	<tr>
					<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Código</th>
		    		<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Producto</th>
		    		<th style='text-align: center; vertical-align: middle;'>Componentes</th>
		    		<th style='text-align: center; vertical-align: middle;'>Tipo</th>
		    		<th style='text-align: center; vertical-align: middle;'>Presentacion</th>
		    		<th style='text-align: center; vertical-align: middle;'>option</th>
		    	</tr>
		    </thead>
		    <tbody>

		<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		    <?php
            while ($producto = mysqli_fetch_array( $resultado))
            {
            echo "<tr>";
            echo "<td>" . $producto['referencia'] . "</td><td>" . $producto['producto'] . "</td><td>" . $producto['tipo'] . "</td><td>" . $producto['capa'] . "</td><td>" . $producto['presentacion'] . "</td><td><a href='editar_producto.php?id=".$producto['id']."'"." class='btn'><i class='fa-solid fa-pencil'></i></a><a href='eliminar_producto.php?id=".$producto['id']."'"." class='btn'><i class='fa-solid fa-trash-can'></i></a></td>";
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
