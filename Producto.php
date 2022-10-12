<!----------Encabezado -------------->
<?php
include('template/encabezado.php');
?>


<?php

# Conexion con la base de datos --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");


# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$consulta = "SELECT `id`,`codigo`,`producto`,`presentacion`,`precio`,`porcentaje_solidos`, (SELECT categoria FROM categorias WHERE id = id_categoria) as categoria FROM sika";
$productos = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

?>


<!-- Encabezado de la tabla ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<table class='table table-hover'>
<thead>
<tr>
<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Codigo</th>
<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Producto</th>
<th style='text-align: center; vertical-align: middle;'>Presentacion</th>
<th style='text-align: center; vertical-align: middle;'>Precio</th>
<th style='text-align: center; vertical-align: middle;'>% de solidos</th>
<th style='text-align: center; vertical-align: middle;'>Categoría</th>
</tr>
</thead>
<tbody>

<!-- Cuerpo y datos de la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

while ($columna = mysqli_fetch_array( $productos))
{
	echo "<tr>";
	echo "<td>" . $columna['codigo'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['presentacion'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['porcentaje_solidos'] . "</td><td>" . $columna['categoria'] . "</td>";
	echo "</tr>";
}

?>

<!-- Cerrar la tabla --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</tbody>
</table>
<!---------- Pie -------------->
<?php
include("template/pie.php");
?>