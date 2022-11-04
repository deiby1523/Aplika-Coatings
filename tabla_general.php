<?php 
$_GET['pag_actual'] = 'Sistema General';

#require_once 'librerias/dompdf/autoload.inc.php';
#use Dompdf\Dompdf;
#$dompdf = new Dompdf();
#ob_start(); //iniciamos un output buffer

include("template/encabezado.php"); ?>


<?php

$nit = $_POST['nit'];
$nombre = $_POST['nombre_cliente'];
$asesor = $_POST['asesor'];
if (isset($_POST['system_name'])) {
   $system_name = $_POST['system_name'];
}


 
$cod_imprimante = $_POST['imprimante'];
$imprimante_espesor = $_POST['imprimante_espesor'];
$imprimante_desperdicio = $_POST['imprimante_desperdicio'];   #Imprimante POST[]
$imprimante_area = $_POST['area'];

$cod_barrera = $_POST['barrera'];
$barrera_espesor = $_POST['barrera_espesor'];
$barrera_desperdicio = $_POST['barrera_desperdicio'];         #Barrera POST[]
$barrera_area = $_POST['area'];

$cod_acabado = $_POST['acabado'];
$acabado_espesor = $_POST['acabado_espesor'];
$acabado_desperdicio = $_POST['acabado_desperdicio'];         #Acabado POST[]
$acabado_area = $_POST['area'];

# Conexion con la base de datos --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
$charset = mysqli_set_charset($conexion, "utf8");



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




#var_dump( $_POST );


?>
<form method="POST" action="reportes.php">

<h1>Tabla Generada</h1>
<hr class="separador">



<div class="container">
    <input type="hidden" name="cod_imprimante" value="<?php echo $cod_imprimante; ?>">
    <input type="hidden" name="cod_barrera" value="<?php echo $cod_barrera; ?>">
    <input type="hidden" name="cod_acabado" value="<?php echo $cod_acabado; ?>">   
    <input type="hidden" name="nit" value="<?php echo $nit; ?>">    
    <input type="hidden" name="asesor" value="<?php echo $asesor; ?>"> 
    <input type="hidden" name="nombre" value="<?php echo $nombre; ?> ">
    
 
<br>
<div class="container">

    <table class='table table-hover table-bordered' style='width: 100%; margin: 0%; border-radius: 10px'>
    <br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Nombre del Sistema:</span>
    <input type="text" name="system_name" class="form-control" <?php if ($system_name != "") {echo "value='$system_name'"; }?>>
    </div>  
    <br>
	<thead class="table-secondary">
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


    
    <?php
    #--------------------------------------------------------------------------------------- Imprimación --------------------------------------------------------------------------------------------------------
        if ($cod_imprimante != 0) {
            echo "<tr>";
            echo "<td>" . $cod_imprimante . "</td>";
            echo "<td>" . $imprimante['producto'] . "</td>";
            echo "<td id='imprimante_presentacion'>" . $imprimante['presentacion'] . "</td>";
            echo "<td id='imprimante_solidos'>" . $imprimante['solidos'] . "</td>";

            echo "<td><input id='imprimante_espesor' name='imprimante_espesor' type='number' step='any' min='0' max='100' class='form-control' value='" . $imprimante_espesor. "'></td>";
      
            echo "<td><input readonly class='form-control' name='imprimante_rendimiento_teorico' id='imprimante_rendimiento_teorico'></td>";

            echo "<td><input id='imprimante_desperdicio' type='number' name='imprimante_desperdicio' class='form-control' value='" . $imprimante_desperdicio. "'></td>";

            echo "<td><input readonly class='form-control' name='imprimante_rendimiento_practico' id='imprimante_rendimiento_practico'></td>";

            echo "<td><input id='imprimante_area' name='imprimante_area' type='number' class='form-control' value='" . $imprimante_area. "'></td>";

            echo "<td><input readonly class='form-control' name='imprimante_galones' id='imprimante_galones'></td>";

            echo "<td><input readonly class='form-control' name='imprimante_unidades' id='imprimante_unidades'></td>";

            echo "</tr>";
        }


        if ($cod_barrera != 0) {
            echo "<tr>";

            echo "<td>" . $cod_barrera . "</td>";
            echo "<td>" . $barrera['producto'] . "</td>";
            echo "<td id='barrera_presentacion'>" . $barrera['presentacion'] . "</td>";
            echo "<td id='barrera_solidos'>" . $barrera['solidos'] . "</td>";

            echo "<td><input id='barrera_espesor' name='barrera_espesor' type='number' step='any' min='0' max='100' class='form-control' value='" . $barrera_espesor. "'></td>";
      
            echo "<td><input readonly class='form-control' name='barrera_rendimiento_teorico' id='barrera_rendimiento_teorico'></td>";

            echo "<td><input id='barrera_desperdicio' name='barrera_desperdicio' type='number' class='form-control' value='" . $barrera_desperdicio. "'></td>";

            echo "<td><input readonly class='form-control' name='barrera_rendimiento_practico' id='barrera_rendimiento_practico'></td>";

            echo "<td><input id='barrera_area' type='number' name='barrera_area' class='form-control' value='" . $barrera_area. "'></td>";

            echo "<td><input readonly class='form-control' name='barrera_galones' id='barrera_galones'></td>";

            echo "<td><input readonly class='form-control' name='barrera_unidades' id='barrera_unidades'></td>";

            echo "</tr>";
        }

        if ($cod_acabado != 0) {
            echo "<tr>";

            echo "<td>" . $cod_acabado . "</td>";
            echo "<td>" . $acabado['producto'] . "</td>";
            echo "<td id='acabado_presentacion'>" . $acabado['presentacion'] . "</td>";
            echo "<td id='acabado_solidos'>" . $acabado['solidos'] . "</td>";

            echo "<td><input id='acabado_espesor' name='acabado_espesor' step='any' min='0' max='100' type='number' class='form-control' value='" . $acabado_espesor. "'></td>";
      
            echo "<td><input readonly class='form-control' name='acabado_rendimiento_teorico' id='acabado_rendimiento_teorico'></td>";

            echo "<td><input id='acabado_desperdicio' name='acabado_desperdicio' type='number' class='form-control' value='" . $acabado_desperdicio. "'></td>";

            echo "<td><input readonly class='form-control' name='acabado_rendimiento_practico' id='acabado_rendimiento_practico'></td>";

            echo "<td><input id='acabado_area' type='number' name='acabado_area' class='form-control' value='" . $acabado_area. "'></td>";

            echo "<td><input readonly class='form-control' name='acabado_galones' id='acabado_galones'></td>";

            echo "<td><input readonly class='form-control' name='acabado_unidades' id='acabado_unidades'></td>";

            echo "</tr>";
        }
    
    
    
    
    ?>
  </tbody>
  </table>

  <?php

  # Recomendaciones Imprimación ---------------------------------------------------------------------------------------------------------

  $consulta = "SELECT preparacion_superficie FROM productos WHERE referencia = '$cod_imprimante'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $imprimante_preparacion_superficie = mysqli_fetch_array( $resultado );

  $consulta = "SELECT disolvente FROM productos WHERE referencia = '$cod_imprimante'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $imprimante_disolvente = mysqli_fetch_array( $resultado ); 

  $consulta = "SELECT eps FROM productos WHERE referencia = '$cod_imprimante'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $imprimante_espesor_recomendado = mysqli_fetch_array( $resultado );

  $consulta = "SELECT vida_mezcla FROM productos WHERE referencia = '$cod_imprimante'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $imprimante_vida_mezcla = mysqli_fetch_array( $resultado );

  $consulta = "SELECT repintabilidad FROM productos WHERE referencia = '$cod_imprimante'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $imprimante_repintabilidad = mysqli_fetch_array( $resultado );

  $consulta = "SELECT secado FROM productos WHERE referencia = '$cod_imprimante'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $imprimante_secado = mysqli_fetch_array( $resultado );

    # Recomendaciones barrera ---------------------------------------------------------------------------------------------------------
  $consulta = "SELECT preparacion_superficie FROM productos WHERE referencia = '$cod_barrera'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $barrera_preparacion_superficie = mysqli_fetch_array( $resultado );

  $consulta = "SELECT disolvente FROM productos WHERE referencia = '$cod_barrera'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $barrera_disolvente = mysqli_fetch_array( $resultado ); 

  $consulta = "SELECT eps FROM productos WHERE referencia = '$cod_barrera'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $barrera_espesor_recomendado = mysqli_fetch_array( $resultado );

  $consulta = "SELECT vida_mezcla FROM productos WHERE referencia = '$cod_barrera'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $barrera_vida_mezcla = mysqli_fetch_array( $resultado );

  $consulta = "SELECT repintabilidad FROM productos WHERE referencia = '$cod_barrera'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $barrera_repintabilidad = mysqli_fetch_array( $resultado );

  $consulta = "SELECT secado FROM productos WHERE referencia = '$cod_barrera'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $barrera_secado = mysqli_fetch_array( $resultado );

    # Recomendaciones acabado ---------------------------------------------------------------------------------------------------------
  $consulta = "SELECT preparacion_superficie FROM productos WHERE referencia = '$cod_acabado'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $acabado_preparacion_superficie = mysqli_fetch_array( $resultado );

  $consulta = "SELECT disolvente FROM productos WHERE referencia = '$cod_acabado'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $acabado_disolvente = mysqli_fetch_array( $resultado ); 

  $consulta = "SELECT eps FROM productos WHERE referencia = '$cod_acabado'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $acabado_espesor_recomendado = mysqli_fetch_array( $resultado );

  $consulta = "SELECT vida_mezcla FROM productos WHERE referencia = '$cod_acabado'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $acabado_vida_mezcla = mysqli_fetch_array( $resultado );

  $consulta = "SELECT repintabilidad FROM productos WHERE referencia = '$cod_acabado'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $acabado_repintabilidad = mysqli_fetch_array( $resultado );

  $consulta = "SELECT secado FROM productos WHERE referencia = '$cod_acabado'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  $acabado_secado = mysqli_fetch_array( $resultado );

  ?>

<?php 
if($cod_imprimante != 0) {
?>

  <br>
  <h2><?php echo $imprimante['producto']; ?></h2>
  <br>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Preparación de Superficie:</span>
    <input type="text" name="imprimante_preparacion_superficie" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_preparacion_superficie[0]; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">disolvente:</span>
    <input type="text" name="imprimante_disolvente" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_disolvente[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Espesor Recomendado:</span>
    <input type="text" name="imprimante_espesor_recomendado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_espesor_recomendado[0]; ?> Mils">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Vida de la mezcla</span>
    <input type="text" name="imprimante_vida_mezcla" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_vida_mezcla[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Secado al tacto</span>
    <input type="text" name="imprimante_secado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_secado[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Repintabilidad</span>
    <input type="text" name="imprimante_repintabilidad" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_repintabilidad[0]; ?>">
  </div>

<?php
}
if ($cod_barrera != 0) {
?>


  <br>
  <h2><?php echo $barrera['producto']; ?></h2>
  <br>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Preparación de Superficie:</span>
    <input type="text" name="barrera_preparacion_superficie" class="form-control" aria-describedby="basic-addon1" value="<?php echo $barrera_preparacion_superficie[0]; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">disolvente:</span>
    <input type="text" name="barrera_disolvente" class="form-control" aria-describedby="basic-addon1" value="<?php echo $barrera_disolvente[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Espesor Recomendado:</span>
    <input type="text" name="barrera_espesor_recomendado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $barrera_espesor_recomendado[0]; ?> Mils">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Vida de la mezcla</span>
    <input type="text" name="barrera_vida_mezcla" class="form-control" aria-describedby="basic-addon1" value="<?php echo $barrera_vida_mezcla[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Secado al tacto</span>
    <input type="text" name="barrera_secado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $barrera_secado[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Repintabilidad</span>
    <input type="text" name="barrera_repintabilidad" class="form-control" aria-describedby="basic-addon1" value="<?php echo $barrera_repintabilidad[0]; ?>">
  </div>

  <?php
}
if ($cod_acabado != 0) {
?>


  <br>
  <h2><?php echo $acabado['producto']; ?></h2>
  <br>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Preparación de Superficie:</span>
    <input type="text" name="acabado_preparacion_superficie" class="form-control" aria-describedby="basic-addon1" value="<?php echo $acabado_preparacion_superficie[0]; ?>">
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">disolvente:</span>
    <input type="text" name="acabado_disolvente" class="form-control" aria-describedby="basic-addon1" value="<?php echo $acabado_disolvente[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Espesor Recomendado:</span>
    <input type="text" name="acabado_espesor_recomendado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $acabado_espesor_recomendado[0]; ?> Mils">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Vida de la mezcla</span>
    <input type="text" name="acabado_vida_mezcla" class="form-control" aria-describedby="basic-addon1" value="<?php echo $acabado_vida_mezcla[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Secado al tacto</span>
    <input type="text" name="acabado_secado" class="form-control" aria-describedby="basic-addon1" value="<?php echo $acabado_secado[0]; ?>">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1" style="width: 208px;">Repintabilidad</span>
    <input type="text" name="acabado_repintabilidad" class="form-control" aria-describedby="basic-addon1" value="<?php echo $acabado_repintabilidad[0]; ?>">
  </div>

  <?php
}
?>
  <!------------------------------------------------------------------------------------------------------------------------------------------------------>


  <br><br><br>
  <div class="input-group">
    <span class="input-group-text">Observaciones adicionales:</span>
    <textarea class="form-control" name="observaciones adicionales" aria-label="With textarea"></textarea>
  </div>
  <br><br><br>

<div class="container">
	    <div class="row">
		    <div class="cancelar col-md-6">
			    <div class="cancel d-grid gap-2">
                    <a class="btn btn-danger" href="home.php?pag_actual=inicio">Cancelar</a>
			    </div>
		    </div>
            <div class="agregar col-md-6">
			    <div class="agrega d-grid gap-2">
				    <button class="btn btn-succes" type="submit">Generar PDF</button>
        	    </div>
		    </div>
	    </div>
    </div>

</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="tabla.js"></script>




<?php
/*
require_once('tabla_general.php'); // llamamos el archivo que se supone contiene el html y dejamoso que se renderize
$dompdf->load_html(ob_get_clean());//y ponemos todo lo que se capturo con ob_start() para que sea capturado por DOMPDF

$dompdf->set_paper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('document.pdf', array("attachment" => true));
*/

include("template/pie.php");
?>