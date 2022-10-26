<!----------Encabezado -------------->
<?php
include("template/encabezado.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<h1 class="titleDato">Administración de Productos</h1>

<?php
if (isset($_GET['msg'])){
	if ($_GET['msg'] == 'ok'){
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha Creado correctamente!</strong> El producto ha sido creado satisfactoriamente, puedes cerrar esta ventana...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} elseif ($_GET['msg'] == 'error') {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error al momento de crear el producto...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

} elseif ($_GET['msg'] == 'errorb') {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error, no fue posible eliminar el producto...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

} elseif ($_GET['msg'] == 'okb') {
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha eliminado el producto</strong>El producto fue borrado satisfactoriamente de la base de datos...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} elseif ($_GET['msg'] == 'oka') {
	?>
	<div class="alert alert-success alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Se ha modificado el producto</strong>El producto fue actualizado satisfactoriamente en la base de datos...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php
} elseif ($_GET['msg'] == 'errora') {
	?>
	<div class="alert alert-danger alert-dismissible fade show" style="margin-top: -4.6%; width: 31%; z-index: 6; position: fixed; display: grid; margin-left: 67%;" role="alert">
	  <strong>Error</strong>Ocurrio un error, no fue posible editar el producto...
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

<?php

}
}

?>

<hr class="separador">


<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="input-group mb-3">
			  <input id="busqueda_producto" name="busqueda_producto" type="text" class="form-control" placeholder="Buscar producto" aria-label="Recipient's username" aria-describedby="button-addon2">
			  <button disabled class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i>
  				<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg></button>
			</div>
		</div>
        <div class="col-md-6">
			<div class="d-grid gap-2">
				<a class="btn btn-succes" href="crear_producto.php?pag_actual=Crear Producto" style="background-color: #F28E2A; color:white; float: right">Crear Producto</a>
        	</div>
		</div>
		
	</div>
</div>
<br><br>



	<section id="tabla_productos">

	</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="producto/producto.js"></script>

<!---------- Pie -------------->
<?php
include("template/pie.php");
?>