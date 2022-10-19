<!----------Encabezado -------------->
<?php
include("template/encabezado.php");
?>

<?php

# Conexion con la base de datos --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");


# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "SELECT * FROM clientes";
$productos = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

?>


	<!-- Encabezado de la tabla ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

	<table class='table table-hover'>
	<thead>
	<tr>
	<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>NIT</th>
	<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Cliente</th>
	<th style='text-align: center; vertical-align: middle;'>Telefono</th>
	<th style='text-align: center; vertical-align: middle;'>Correo</th>
	<th style='text-align: center; vertical-align: middle;'>Departamento</th>
	<th style='text-align: center; vertical-align: middle;'>Ciudad</th>
	<th style='text-align: center; vertical-align: middle;'>Dirección</th>
	</tr>
	</thead>
	<tbody>

	<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?php

	while ($columna = mysqli_fetch_array( $productos))
	{
		echo "<tr>";
		echo "<td>" . $columna['nit'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['celular'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['departamento'] . "</td><td>" . $columna['ciudad'] . "</td><td>" . $columna['direccion'] . "</td>";
		echo "</tr>";
	}

	?>

	<!-- Cerrar la tabla ------------------------------------>
	</tbody>
	</table>


<!--- Cerrar la conexion con la base de datos ----------->
<?php
mysqli_close($conexion);
?>
<!---------- Pie -------------->
<?php
include("template/pie.php");
?>