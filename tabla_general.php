<?php 
$_GET['pag_actual'] =  "Tabla Generada";
include("template/encabezado.php"); ?>

<?php


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



var_dump( $_POST );

?>

<div class="container">
    <table class='table table-hover table-striped-columns' style='width: 100%; margin: 0%'>
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
    <?php
    #--------------------------------------------------------------------------------------- Imprimación --------------------------------------------------------------------------------------------------------
        if ($cod_imprimante != 0) {
            echo "<tr>";
            echo "<td>" . $cod_imprimante . "</td>";
            echo "<td>" . $imprimante['producto'] . "</td>";
            echo "<td id='imprimante_presentacion'>" . $imprimante['presentacion'] . "</td>";
            echo "<td id='imprimante_solidos'>" . $imprimante['solidos'] . "</td>";

            echo "<td><input id='imprimante_espesor' type='number' class='form-control' value='" . $imprimante_espesor. "'></td>";
      
            echo "<td><input disabled class='form-control' id='imprimante_rendimiento_teorico'></td>";

            echo "<td><input id='imprimante_desperdicio' type='number' class='form-control' value='" . $imprimante_desperdicio. "'></td>";

            echo "<td><input disabled class='form-control' id='imprimante_rendimiento_practico'></td>";

            echo "<td><input id='imprimante_area' type='number' class='form-control' value='" . $imprimante_area. "'></td>";

            echo "<td><input disabled class='form-control' id='imprimante_galones'></td>";

            echo "<td><input disabled class='form-control' id='imprimante_unidades'></td>";

            echo "</tr>";
        }


        if ($cod_barrera != 0) {
            echo "<tr>";

            echo "<td>" . $cod_barrera . "</td>";
            echo "<td>" . $barrera['producto'] . "</td>";
            echo "<td id='barrera_presentacion'>" . $barrera['presentacion'] . "</td>";
            echo "<td id='barrera_solidos'>" . $barrera['solidos'] . "</td>";

            echo "<td><input id='barrera_espesor' type='number' class='form-control' value='" . $barrera_espesor. "'></td>";
      
            echo "<td><input disabled class='form-control' id='barrera_rendimiento_teorico'></td>";

            echo "<td><input id='barrera_desperdicio' type='number' class='form-control' value='" . $barrera_desperdicio. "'></td>";

            echo "<td><input disabled class='form-control' id='barrera_rendimiento_practico'></td>";

            echo "<td><input id='barrera_area' type='number' class='form-control' value='" . $barrera_area. "'></td>";

            echo "<td><input disabled class='form-control' id='barrera_galones'></td>";

            echo "<td><input disabled class='form-control' id='barrera_unidades'></td>";

            echo "</tr>";
        }

        if ($cod_acabado != 0) {
            echo "<tr>";

            echo "<td>" . $cod_acabado . "</td>";
            echo "<td>" . $acabado['producto'] . "</td>";
            echo "<td id='acabado_presentacion'>" . $acabado['presentacion'] . "</td>";
            echo "<td id='acabado_solidos'>" . $acabado['solidos'] . "</td>";

            echo "<td><input id='acabado_espesor' type='number' class='form-control' value='" . $acabado_espesor. "'></td>";
      
            echo "<td><input disabled class='form-control' id='acabado_rendimiento_teorico'></td>";

            echo "<td><input id='acabado_desperdicio' type='number' class='form-control' value='" . $acabado_desperdicio. "'></td>";

            echo "<td><input disabled class='form-control' id='acabado_rendimiento_practico'></td>";

            echo "<td><input id='acabado_area' type='number' class='form-control' value='" . $acabado_area. "'></td>";

            echo "<td><input disabled class='form-control' id='acabado_galones'></td>";

            echo "<td><input disabled class='form-control' id='acabado_unidades'></td>";

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

?>
<br><br><br><br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Preparación de Superficie:</span>
  <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_preparacion_superficie[0]; ?>">
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">disolvente:</span>
  <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_disolvente[0]; ?>">
</div>
<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Espesor Recomendado:</span>
  <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $imprimante_espesor_recomendado[0]; ?> Mils">
</div>


<br>
<div class="input-group">
  <span class="input-group-text">Observaciones adicionales:</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<br><br><br>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="tabla.js"></script>