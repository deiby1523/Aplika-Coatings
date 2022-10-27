<?php 

require_once 'librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

ob_start(); //iniciamos un output buffer

?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php
#var_dump($_POST);
$cod_imprimante = $_POST['cod_imprimante'];
$cod_barrera = $_POST['cod_barrera'];
$cod_acabado = $_POST['cod_acabado'];

$imprimante_espesor = $_POST['imprimante_espesor'];
$imprimante_rendimiento_teorico = $_POST['imprimante_rendimiento_teorico'];
$imprimante_desperdicio = $_POST['imprimante_desperdicio'];
$imprimante_rendimiento_practico = $_POST['imprimante_rendimiento_practico'];
$imprimante_area = $_POST['imprimante_area'];
$imprimante_galones = $_POST['imprimante_galones'];
$imprimante_unidades = $_POST['imprimante_unidades'];


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");


# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
# Codigos de productos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "SELECT * FROM productos WHERE referencia = '$cod_imprimante'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$imprimante = mysqli_fetch_array( $resultado );


$consulta = "SELECT * FROM productos WHERE referencia = '$cod_barrera'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$barrera = mysqli_fetch_array( $resultado );

$consulta = "SELECT * FROM productos WHERE referencia = '$cod_acabado'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$acabado = mysqli_fetch_array( $resultado );

?>
<br><br><br>
<div class="container">
<table class='table' style='width: 100%; margin: 0%'>

	<thead>
		<tr>
			<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Código</th>
			<th style='text-align: center; vertical-align: middle;' class='col-md-3'>Producto</th>
			<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Presentacion</th>
			<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Solidos % </th>
			<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>EPS(Mils)</th>
			<th style='text-align: center; vertical-align: middle;'>Rendimiento Teórico Mts2/GAL</th>
            <th style='text-align: center; vertical-align: middle;'>Desperdicio</th>
			<th style='text-align: center; vertical-align: middle;'>Rendimiento Práctico Mt2/GAL</th>
            <th style='text-align: center; vertical-align: middle;' class='col-sm-2'>Area</th>
            <th style='text-align: center; vertical-align: middle;'>Cantidad de galones</th>
            <th style='text-align: center; vertical-align: middle;'>Cantidad de Unidades</th>
		</tr>
	  </thead>
	  <tbody>
        <tr>
        <?php 
            echo "<td>" . $imprimante['referencia'] . "</td><td>" . $imprimante['producto'] . "</td><td>" . $imprimante['presentacion'] . "</td><td>" . $imprimante['solidos'] . "</td><td>" . $_POST['imprimante_espesor'] . "</td><td>" . $_POST['imprimante_rendimiento_teorico'] . "</td><td>" . $_POST['imprimante_desperdicio'] . "</td><td>" . $_POST['imprimante_rendimiento_practico'] . "</td><td>" . $_POST['imprimante_area'] . "</td><td>" . round($_POST['imprimante_galones'], 2) . "</td><td>" . $_POST['imprimante_unidades'] . "</td>";
        ?>
        </tr>   
</div>
<?php

require_once('reportes.php'); // llamamos el archivo que se supone contiene el html y dejamoso que se renderize
$dompdf->load_html(ob_get_clean());//y ponemos todo lo que se capturo con ob_start() para que sea capturado por DOMPDF

$dompdf->set_paper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('ReporteAPK.pdf');

/*
require_once 'librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

ob_start(); //iniciamos un output buffer

require_once('reportes.php'); // llamamos el archivo que se supone contiene el html y dejamoso que se renderize
$dompdf->load_html(ob_get_clean());//y ponemos todo lo que se capturo con ob_start() para que sea capturado por DOMPDF

$dompdf->set_paper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('document.pdf');
*/


?>