<!----------Encabezado -------------->
<?php
include("template/encabezado.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<h1 class="titleDato">Administración de Clientes</h1>

<?php
if (isset($_GET['msg'])){
	if ($_GET['msg'] == 'ok'){
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha Creado correctamente!</strong> El cliente ha sido creado satisfactoriamente, puedes cerrar esta ventana...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} else {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error al momento de crear el cliente...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

}
}

?>

<hr class="separador">



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
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Buscar cliente" aria-label="Recipient's username" aria-describedby="button-addon2">
			  <button disabled class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i>
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
			</div>
		</div>
        <div class="col-md-6">
			<div class="d-grid gap-2">
				<a class="btn btn-succes" href="crear_cliente.php" style="background-color: #ff7c00; color:white; float: right">Crear Cliente</a>
        	</div>
		</div>
		
	</div>
</div>
<br><br>

	<!---------------------------------------------------- Encabezado de la tabla ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

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
				<th style='text-align: center; vertical-align: middle;'>option</th>
			</tr>
		</thead>
		<tbody>

		<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<?php

			while ($columna = mysqli_fetch_array( $productos))
			{
				echo "<tr>";
				echo "<td>" . $columna['nit'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['celular'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['departamento'] . "</td><td>" . $columna['ciudad'] . "</td><td>" . $columna['direccion'] . "</td><td><a href='#' class='btn'><i class='fa-solid fa-pencil'></i></a><a href='#' class='btn'><i class='fa-solid fa-trash-can'></i></a></td>";
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