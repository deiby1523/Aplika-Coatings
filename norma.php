<!----------Encabezado -------------->
<?php

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password,) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
$charset = mysqli_set_charset($conexion, "utf8");


$_GET['pag_actual'] =  "Normas";
include("template/encabezado.php");



?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<h1 class="titleDato">Administración de Normas</h1>

<?php
if (isset($_GET['msg'])){
	if ($_GET['msg'] == 'ok'){
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha Creado correctamente!</strong> la norma ha sido creada satisfactoriamente, puedes cerrar esta ventana...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} elseif ($_GET['msg'] == 'error') {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error al momento de crear la norma...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

} elseif ($_GET['msg'] == 'errorb') {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error, no fue posible eliminar la norma...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

} elseif ($_GET['msg'] == 'okb') {
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha eliminado la norma</strong>la norma fue borrada satisfactoriamente de la base de datos...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} elseif ($_GET['msg'] == 'oka') {
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha modificado la norma</strong>la norma fue actualizada satisfactoriamente en la base de datos...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} elseif ($_GET['msg'] == 'errora') {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error, no fue posible editar la norma...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

}
}

?>

<hr class="separador">


<div class="container">
	<div class="row">
        <div class="col-md-12 button_Crear">
			<div class="d-grid gap-2">
				<a class="btn btn-succes"href="crear_norma.php?pag_actual=Crear norma">Nueva Norma</a>
        	</div>
		</div>
		
	</div>
</div>
<br><br>


	<!---------------------------------------------------- Encabezado de la tabla ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

	<section id="tabla_normas">
	<?php
	$consulta = "SELECT n.id, c.nombre , n.codigo, n.uso , n.temperatura_min, n.temperatura_max, n.sistema FROM clientes as c, normas as n WHERE n.entidad = c.nit ORDER BY c.nombre, n.uso, n.temperatura_min , n.sistema";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        
            ?>
            <table class='table table-hover' id='tabla_normas' style='width: 94%; margin: 2%'>
		    <thead>
		    	<tr>
		    		<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Nombre</th>
		    		<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Codigo</th>
		    		<th style='text-align: center; vertical-align: middle;'>Uso</th>
		    		<th style='text-align: center; vertical-align: middle;'>Temperatura minima</th>
					<th style='text-align: center; vertical-align: middle;'>Temperatura máxima</th>
                    <th style='text-align: center; vertical-align: middle;'>Sistema</th>

		    		<th style='text-align: center; vertical-align: middle;'>option</th>
		    	</tr>
		    </thead>
		    <tbody>

		<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		    <?php
            while ($norma = mysqli_fetch_array( $resultado))
            {
            echo "<tr>";
            echo "<td style='text-align: center;'>" . $norma['nombre'] . "</td><td style='text-align: center;'>" . $norma['codigo'] . "</td><td style='text-align: center;'>" . $norma['uso'] . "</td><td style='text-align: center;'>" . $norma['temperatura_min'] . "</td><td style='text-align: center;'>" . $norma['temperatura_max'] . "</td><td style='text-align: center;'>" . $norma['sistema'] . "</td><td style='text-align: center;'><a href='eliminar_norma.php?id=".$norma['id']."'"." class='btn'><i class='fa-solid fa-trash-can'></i></a></td>";
            echo "</tr>";
            }
            ?>
		<!-- Cerrar la tabla ------------------------------------>
		    </tbody>
	        </table>
            <?php
    
}
	?>


	</section>



<!---------- Pie -------------->
<?php
include("template/pie.php");
?>