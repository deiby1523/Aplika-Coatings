<?php include("template/encabezado.php"); ?>


<?php


$cod_imprimante = $_POST['imprimante'];
$imprimante_espesor = $_POST['imprimante_espesor'];
$imprimante_desperdicio = $_POST['imprimante_desperdicio'];
$imprimante_area = $_POST['area'];

# Conexion con la base de datos --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");


# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "SELECT * FROM productos WHERE referencia = '$cod_imprimante'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$imprimante = mysqli_fetch_array( $resultado );



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
            echo "<tr>";

            echo "</tr>";
        }
    
    
    
    
    ?>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="tabla.js"></script>