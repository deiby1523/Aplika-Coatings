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
$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$asesor = $_POST['asesor'];

if (isset($_POST['system_name'])) {
	$system_name = $_POST['system_name'];
 }
 

if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
$cod_imprimante = $_POST['cod_imprimante'];
$imprimante_espesor = $_POST['imprimante_espesor'];
$imprimante_rendimiento_teorico = $_POST['imprimante_rendimiento_teorico'];
$imprimante_desperdicio = $_POST['imprimante_desperdicio'];
$imprimante_rendimiento_practico = $_POST['imprimante_rendimiento_practico'];
$imprimante_area = $_POST['imprimante_area'];
$imprimante_galones = $_POST['imprimante_galones'];
$imprimante_unidades = $_POST['imprimante_unidades'];
}

if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
$cod_barrera = $_POST['cod_barrera'];
$barrera_espesor = $_POST['barrera_espesor'];
$barrera_rendimiento_teorico = $_POST['barrera_rendimiento_teorico'];
$barrera_desperdicio = $_POST['barrera_desperdicio'];
$barrera_rendimiento_practico = $_POST['barrera_rendimiento_practico'];
$barrera_area = $_POST['barrera_area'];
$barrera_galones = $_POST['barrera_galones'];
$barrera_unidades = $_POST['barrera_unidades'];
}

if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
$cod_acabado = $_POST['cod_acabado'];
$acabado_espesor = $_POST['acabado_espesor'];
$acabado_rendimiento_teorico = $_POST['acabado_rendimiento_teorico'];
$acabado_desperdicio = $_POST['acabado_desperdicio'];
$acabado_rendimiento_practico = $_POST['acabado_rendimiento_practico'];
$acabado_area = $_POST['acabado_area'];
$acabado_galones = $_POST['acabado_galones'];
$acabado_unidades = $_POST['acabado_unidades'];
}








$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
$charset = mysqli_set_charset($conexion, "utf8");



# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
# Codigos de productos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
$consulta = "SELECT * FROM productos WHERE referencia = '$cod_imprimante'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$imprimante = mysqli_fetch_array( $resultado );
}

if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
$consulta = "SELECT * FROM productos WHERE referencia = '$cod_barrera'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$barrera = mysqli_fetch_array( $resultado );
}

if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
	$consulta = "SELECT * FROM productos WHERE referencia = '$cod_acabado'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	$acabado = mysqli_fetch_array( $resultado );
}



$nombreImagen = "img/marcaAPLIKA.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));


$nombreImagen2 = "img/encabezado2.png";
$imagenBase642 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen2));

$nombreImagen3 = "img/membrete.jpg";
$imagenBase643 = "data:image/jpg;base64," . base64_encode(file_get_contents($nombreImagen3));

?>

<img style="margin-top: -5.6% ; margin-left: -10%; z-index: -1; position: absolute; width: 122%; height: 107%;" src="<?php echo $imagenBase643; ?>;">
	


<div class="container_general">
	<br><br><br><br><br>

	<p style="margin-left: 5.5%;font-size: 20px; margin-top:5rem; font-family: Helvetica">
		Señor(a) <br>
		<strong><?php echo $nombre; ?></strong> <br>
		<strong><?php echo $nit; ?></strong>.<br><br>
		Se presenta la siguiente memoria de calculo de rendimiento y consumo para el siguiente sistema de recubrimientos
	</p>
</div>



<div class="container">
<?php
if ((isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) OR (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) OR (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0))
	{
?>



<?php
if ($system_name != "") {
	?>
	<h2 style="width: 160% !important;  margin-left: -160px; border: solid black 1px; position: relative; margin-bottom: -41px; text-align: center; vertical-align: middle; font-family: Helvetica;"><strong> <?php echo $system_name; ?></strong></h2>
	<?php
}


?>


<table class='table_report' style="width: 160% !important;
    margin-top: 40px; margin-left: -160px; border: solid black 1px; font-family: Helvetica; font-size: 14px;">

	<thead style="border: solid black 1px">
		<tr>
			<th style="text-align: center; vertical-align: middle; margin-rigth:2px; margin:3px; border: solid black 1px" class='col-sm-1'>Código</th>
			<th style='text-align: center; vertical-align: middle; width: 110%; border: solid black 1px'>Producto</th>
			<th style="text-align: center; vertical-align: middle; border: solid black 1px" class='col-sm-1'>Presentacion (GAL)</th>
			<th style='text-align: center; vertical-align: middle; border: solid black 1px' class='col-sm-1'>Solidos % </th>
			<th style='text-align: center; vertical-align: middle; border: solid black 1px' class='col-sm-1'>EPS(Mils)</th>
			<th style='text-align: center; vertical-align: middle; border: solid black 1px'>Rendimiento Teórico Mts2/GAL</th>
            <th style='text-align: center; vertical-align: middle; border: solid black 1px'>Desperdicio %</th>
			<th style='text-align: center; vertical-align: middle; border: solid black 1px'>Rendimiento Práctico Mt2/GAL</th>
            <th style='text-align: center; vertical-align: middle; border: solid black 1px width: 70px' class='col-sm-2'>Area Mt2</th>
            <th style='text-align: center; vertical-align: middle; border: solid black 1px'>Cantidad de galones</th>
            <th style='text-align: center; vertical-align: middle; border: solid black 1px'>Cantidad de Unidades</th>
		</tr>
	</thead>
	  <tbody style="border: solid black 1px; border-spacing: 0px">
	  <?php
	  if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
		?>

        <tr >
        <?php 
            echo "<td style='border: solid black 1px'>" . $imprimante['referencia'] . "</td><td style='border: solid black 1px'>" . $imprimante['producto'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $imprimante['presentacion'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $imprimante['solidos'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['imprimante_espesor'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['imprimante_rendimiento_teorico'],2) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['imprimante_desperdicio'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['imprimante_rendimiento_practico'],2 ). "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['imprimante_area'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['imprimante_galones'], 2) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['imprimante_unidades'] . "</td>";
        ?>
        </tr>
		<?php
		}		
		?> 
		&nbsp;  
		<?php
	  	if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
		?>
		<tr style="border: solid black 1px">
        <?php 
            echo "<td style='border: solid black 1px'>" . $barrera['referencia'] . "</td><td style='border: solid black 1px'>" . $barrera['producto'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $barrera['presentacion'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $barrera['solidos'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['barrera_espesor'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['barrera_rendimiento_teorico'],2) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['barrera_desperdicio'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['barrera_rendimiento_practico'],2 ) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['barrera_area'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['barrera_galones'], 2) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['barrera_unidades'] . "</td>";
        ?>
        </tr> 
		<?php
		}
		?>
		&nbsp;
		<?php
	  	if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
		?>
		<tr style="border: solid black 1px">
        <?php 
            echo "<td style='border: solid black 1px'>" . $acabado['referencia'] . "</td><td style='border: solid black 1px'>" . $acabado['producto'] . "</td><td style='text-align: center; vertical-align: middle; border: solid bstyle='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $acabado['presentacion'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $acabado['solidos'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['acabado_espesor'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['acabado_rendimiento_teorico'],2) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['acabado_desperdicio'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['acabado_rendimiento_practico'],2 ) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['acabado_area'] . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . round($_POST['acabado_galones'], 2) . "</td><td style='text-align: center; vertical-align: middle; border: solid black 1px; aling-items: center;'>" . $_POST['acabado_unidades'] . "</td>";
        ?>
        </tr> 
		<?php
		}
		?>	
	   </tbody>
	   </table>
	   <?php
	}  
	 
	 ?>

	
<div class="container" style="margin: 6rem -100px;">

<?php
if ((isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) OR (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) OR (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0))
	{
?>

	<table style="margin-left: -30px;font-family: Helvetica ;font-size: 15px;  width: 50rem;">
	<thead>
		<th>
			
		</th>
		<?php
	  	if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
		?>
		<th>
			<?php echo $imprimante['producto']; ?>
		</th>
		<?php
		}
	  	if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
		?>
		<th>
			<?php echo $barrera['producto']; ?>
		</th>
		<?php
		}
	  	if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
		?>
		<th>
			<?php echo $acabado['producto']; ?>
		</th>
		<?php
		}
		?>
	</thead>
	<tbody>
		<tr>
			<td>
				<strong>Preparacion de superficie</strong>
			</td>
			<?php
		
	  		if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
			?>
			<td>
				<?php echo $_POST['imprimante_preparacion_superficie']; ?>
			</td>
			<?php
			}
	  		if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
			?>
			<td>
				<?php echo $_POST['barrera_preparacion_superficie']; ?>
			</td>
			<?php
			}
	  		if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
			?>
			<td>
				<?php echo $_POST['acabado_preparacion_superficie']; ?>
			</td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>
				<strong>Disolvente</strong>
			</td>
			<?php
		
	  		if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
			?>
			<td>
				<?php echo $_POST['imprimante_disolvente']; ?>
			</td>
			<?php
			}
	  		if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
			?>
			<td>
				<?php echo $_POST['barrera_disolvente']; ?>
			</td>
			<?php
			}
	  		if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
			?>
			<td>
				<?php echo $_POST['acabado_disolvente']; ?>
			</td>
			<?php
			}
		
			?>
		</tr>
		<tr>
			<td>
				<strong>Espesor Recomendado</strong>
			</td>
			<?php
			
	  		if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
			?>
			<td>
				<?php echo $_POST['imprimante_espesor_recomendado']; ?>
			</td>
			<?php
			}
	  		if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
			?>
			<td>
				<?php echo $_POST['barrera_espesor_recomendado']; ?>
			</td>
			<?php
			}
	  		if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
			?>
			<td>
				<?php echo $_POST['acabado_espesor_recomendado']; ?>
			</td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>
				<strong>Vida de la mezcla</strong>
			</td>

			<?php
		
	  		if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
			?>
			<td>
				<?php echo $_POST['imprimante_vida_mezcla']; ?>
			</td>
			<?php
		}
	  	if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
		?>
			<td>
				<?php echo $_POST['barrera_vida_mezcla']; ?>
			</td>
			<?php
		}
	  	if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
		?>
			<td>
				<?php echo $_POST['acabado_vida_mezcla']; ?>
			</td>
			<?php
		}
		?>
		</tr>
		<tr>
			<td>
				<strong>Secado al tacto</strong>
			</td>
			<?php
		
	  	if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
		?>
			<td>
				<?php echo $_POST['imprimante_secado']; ?>
			</td>
			<?php
		}
	  	if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
		?>
			<td>
				<?php echo $_POST['barrera_secado']; ?>
			</td>
			<?php
		}
	  	if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
		?>
			<td>
				<?php echo $_POST['acabado_secado']; ?>
			</td>
			<?php
		}
		?>
		</tr>
		<tr>
			<td>
				<strong>Repintabilidad</strong>
			</td>
			<?php
		
	  	if (isset($_POST['cod_imprimante']) && $_POST['cod_imprimante'] != 0) {
		?>
			<td>
				<?php echo $_POST['imprimante_repintabilidad']; ?>
			</td>
			<?php
		}
	  	if (isset($_POST['cod_barrera']) && $_POST['cod_barrera'] != 0) {
		?>
			<td>
				<?php echo $_POST['barrera_repintabilidad']; ?>
			</td>
			<?php
		}
	  	if (isset($_POST['cod_acabado']) && $_POST['cod_acabado'] != 0) {
		?>
			<td>
				<?php echo $_POST['acabado_repintabilidad']; ?>
			</td>
			<?php
		}
		?>
		</tr>
	</tbody>
	</table>
	<?php
	}
	
	?>

</div>

<?php
if ($_POST['observaciones_adicionales'] != "") 
{
	?>
	<br><br>
  		<div class="input-group">
  		  <span style="font-family: Helvetica" class="input-group-text"><strong>Observaciones adicionales:</strong></span>
			<textarea class="form-control" style="background-color: transparent ;font-family: Helvetica; width: 32rem; height: 150px" aria-label="With textarea"><?php echo $_POST['observaciones_adicionales']; ?></textarea>
  		</div>
<?php
}
?>


	   
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