<?php 

require_once 'librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();



ob_start(); //iniciamos un output buffer

?>
<link rel="stylesheet" href="main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php
#var_dump($_POST);
$nit = $_POST['nit'];
$asesor = $_POST['asesor'];

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

$barrera_espesor = $_POST['barrera_espesor'];
$barrera_rendimiento_teorico = $_POST['barrera_rendimiento_teorico'];
$barrera_desperdicio = $_POST['barrera_desperdicio'];
$barrera_rendimiento_practico = $_POST['barrera_rendimiento_practico'];
$barrera_area = $_POST['barrera_area'];
$barrera_galones = $_POST['barrera_galones'];
$barrera_unidades = $_POST['barrera_unidades'];

$acabado_espesor = $_POST['acabado_espesor'];
$acabado_rendimiento_teorico = $_POST['acabado_rendimiento_teorico'];
$acabado_desperdicio = $_POST['acabado_desperdicio'];
$acabado_rendimiento_practico = $_POST['acabado_rendimiento_practico'];
$acabado_area = $_POST['acabado_area'];
$acabado_galones = $_POST['acabado_galones'];
$acabado_unidades = $_POST['acabado_unidades'];


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

$consulta = "SELECT * FROM clientes WHERE nit = '$nit'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$empresa = mysqli_fetch_array( $resultado );


$nombreImagen = "img/marcaAPLIKA.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));

?>

<div class="container_general">
	<div class="encabezado">
		<img src="<?php echo $imagenBase64 ?>" 
		style=" width: 230px; height: 100px	;">
		<hr>
	</div>

	<p style="font-size: 20px; margin-top:4rem;">
		Estimad@   <strong><?php echo $empresa['nombre']; ?></strong> con nit: <strong><?php echo $empresa['nit']; ?></strong>.<br><br>
		Este calculo de rendimiento fue realizado por el asesor <?php echo $asesor; ?>, para determinar el rendimiento del siguiente <br> 
		sistema de recubrimientos.
	</p>
</div>


<div class="container">
<table class='table_report' style="width: 200px;
    margin-rigth: 400px; !important; border: solid black 1px">

	<thead style="border: solid black 1px">
		<tr>
			<th style='text-align: center; vertical-align: middle;' class='col-sm-1'>Código</th>
			<th style='text-align: center; vertical-align: middle; width: 30px;' class='col-md-3'>Producto</th>
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
	  <tbody style="border: solid black 1px; border-spacing: 0px">
        <tr >
        <?php 
            echo "<td style='border: solid black 1px'>" . $imprimante['referencia'] . "</td><td style='border: solid black 1px'>" . $imprimante['producto'] . "</td><td style='border: solid black 1px'>" . $imprimante['presentacion'] . "</td><td style='border: solid black 1px'>" . $imprimante['solidos'] . "</td><td style='border: solid black 1px'>" . $_POST['imprimante_espesor'] . "</td><td style='border: solid black 1px'>" . $_POST['imprimante_rendimiento_teorico'] . "</td><td style='border: solid black 1px'>" . $_POST['imprimante_desperdicio'] . "</td><td style='border: solid black 1px'>" . $_POST['imprimante_rendimiento_practico'] . "</td><td style='border: solid black 1px'>" . $_POST['imprimante_area'] . "</td><td style='border: solid black 1px'>" . round($_POST['imprimante_galones'], 2) . "</td><td style='border: solid black 1px' style='border: solid black 1px'>" . $_POST['imprimante_unidades'] . "</td>";
        ?>
        </tr> 
		&nbsp;  
		<tr style="border: solid black 1px">
        <?php 
            echo "<td style='border: solid black 1px'>" . $barrera['referencia'] . "</td><td style='border: solid black 1px'>" . $barrera['producto'] . "</td><td style='border: solid black 1px'>" . $barrera['presentacion'] . "</td><td style='border: solid black 1px'>" . $barrera['solidos'] . "</td><td style='border: solid black 1px'>" . $_POST['barrera_espesor'] . "</td><td style='border: solid black 1px'>" . $_POST['barrera_rendimiento_teorico'] . "</td><td style='border: solid black 1px'>" . $_POST['barrera_desperdicio'] . "</td><td style='border: solid black 1px'>" . $_POST['barrera_rendimiento_practico'] . "</td><td style='border: solid black 1px'>" . $_POST['barrera_area'] . "</td><td style='border: solid black 1px'>" . round($_POST['barrera_galones'], 2) . "</td><td style='border: solid black 1px' style='border: solid black 1px'>" . $_POST['barrera_unidades'] . "</td>";
        ?>
        </tr> 
		&nbsp;
		<tr style="border: solid black 1px">
        <?php 
            echo "<td style='border: solid black 1px'>" . $acabado['referencia'] . "</td><td style='border: solid black 1px'>" . $acabado['producto'] . "</td><td style='border: solid black 1px'>" . $acabado['presentacion'] . "</td><td style='border: solid black 1px'>" . $acabado['solidos'] . "</td><td style='border: solid black 1px'>" . $_POST['acabado_espesor'] . "</td><td style='border: solid black 1px'>" . $_POST['acabado_rendimiento_teorico'] . "</td><td style='border: solid black 1px'>" . $_POST['acabado_desperdicio'] . "</td><td style='border: solid black 1px'>" . $_POST['acabado_rendimiento_practico'] . "</td><td style='border: solid black 1px'>" . $_POST['acabado_area'] . "</td><td style='border: solid black 1px'>" . round($_POST['acabado_galones'], 2) . "</td><td style='border: solid black 1px' style='border: solid black 1px'>" . $_POST['acabado_unidades'] . "</td>";
        ?>
        </tr> 
	   </tbody>
	   </table>


	   <br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">

	<table style="font-size: 12px">
	<thead>
		<th>
		</th>
			Caracteristica
		<th>
			<?php echo $imprimante['producto']; ?>
		</th>
		<th>
			<?php echo $barrera['producto']; ?>
		</th>
		<th>
			<?php echo $acabado['producto']; ?>
		</th>
	</thead>
	<tbody>
		<tr>
			<td>
				Preparacion de superficie
			</td>
			<td>
				<?php echo $_POST['imprimante_preparacion_superficie']; ?>
			</td>
			<td>
				<?php echo $_POST['barrera_preparacion_superficie']; ?>
			</td>
			<td>
				<?php echo $_POST['acabado_preparacion_superficie']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Disolvente
			</td>
			<td>
				<?php echo $_POST['imprimante_disolvente']; ?>
			</td>
			<td>
				<?php echo $_POST['barrera_disolvente']; ?>
			</td>
			<td>
				<?php echo $_POST['acabado_disolvente']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Espesor Recomendado
			</td>
			<td>
				<?php echo $_POST['imprimante_espesor_recomendado']; ?>
			</td>
			<td>
				<?php echo $_POST['barrera_espesor_recomendado']; ?>
			</td>
			<td>
				<?php echo $_POST['acabado_espesor_recomendado']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Vida de la mezcla
			</td>
			<td>
				<?php echo $_POST['imprimante_vida_mezcla']; ?>
			</td>
			<td>
				<?php echo $_POST['barrera_vida_mezcla']; ?>
			</td>
			<td>
				<?php echo $_POST['acabado_vida_mezcla']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Secado al tacto
			</td>
			<td>
				<?php echo $_POST['imprimante_secado']; ?>
			</td>
			<td>
				<?php echo $_POST['barrera_secado']; ?>
			</td>
			<td>
				<?php echo $_POST['acabado_secado']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Repintabilidad
			</td>
			<td>
				<?php echo $_POST['imprimante_repintabilidad']; ?>
			</td>
			<td>
				<?php echo $_POST['barrera_repintabilidad']; ?>
			</td>
			<td>
				<?php echo $_POST['acabado_repintabilidad']; ?>
			</td>
		</tr>
	</tbody>
	</table>

</div>


  		<br>
  		<div class="input-group">
  		  <span class="input-group-text">Observaciones adicionales:</span>
  		  <p class="form-control"></p><?php echo $_POST['observaciones_adicionales']; ?></p>
  		</div>
  		<br><br><br>

	   
</div>
<?php

require_once('reportes.php'); // llamamos el archivo que se supone contiene el html y dejamoso que se renderize
$dompdf->load_html(ob_get_clean());//y ponemos todo lo que se capturo con ob_start() para que sea capturado por DOMPDF

$options = $dompdf->getOptions();
$options-> set(array('isRemoteEnabled'=> true));
$dompdf->setOptions($options);

#$dompdf->set_paper('letter', 'portrait');
$dompdf->set_paper(array(0, 0, 790, 1000), 'portrait');
$dompdf->render();
$dompdf->stream('ReporteAPK.pdf', array("attachment" => true));


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