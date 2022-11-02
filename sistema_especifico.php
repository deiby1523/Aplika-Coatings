<?php include("template/encabezado.php"); ?>

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
$consulta = "SELECT * FROM user WHERE rol = 'asesor'";
$asesores = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$consulta = "SELECT * FROM clientes";
$clientes = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

$consulta = "SELECT uso FROM normas GROUP BY uso";
$usos = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="producto/producto.js"></script>
<script src="normas.js"></script>

        <h1 class="titleDato">Solicitud de sistema por especificacion</h1>

        <hr class="separador">

    <div class="container">
       
        <form method='POST' class='form-control form-data' action='tabla_especifica.php'>
        <div class="row">
            <div class="col">
            
            <div class="input-group add mb-4">
                <label class="input-group-text amp " for="inputGroupSelect01"><strong>Entidad</strong></label>
                <select name="select_cliente" class="form-select" id="select_cliente" required>
                    <option selected></option>
                    <?php
                    while ($cliente = mysqli_fetch_array( $clientes)) {
                        echo "<option value='".$cliente['nit']."'>".$cliente['nombre']."</option>";
                    }
                    ?>
                  
                </select>
            </div>
            

            <div id="seccion_usos" class="input-group add">        
            </div>

            <div id="seccion_temperaturas" class="input-group add">
            </div>

            <div id="seccion_sistemas" class="input-group add">
            </div>

            <div class="input-group add mb-2" style="height: 60px;">
                <label class="input-group-text amp" for="area" style="width: 17%;"><strong>Area</strong></label>
                <input name="area" type="number" class="form-control" id="area" placeholder="Metros Cuadraddos">
            </div>
            </div>
            <div class="col">
            <h1> Panel de selección de productos </h1>
            </div>
            </div>
            
            <br>        

            

<!-------------------------------------------------- acordion  ------------------------------------------------------------------------------------------------------------------------------>


            
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h2><strong>Capa de imprimación</strong></h2>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="input-group imprimacion">
                <span class="input-group-text"><strong>Capa de imprimación</strong></span>
                <div class="row">
                    <select class="form-select " id="select_solidos"+>
                        <option value="0" selected>Porcentaje de Solidos</option>
                        <option value="0">Cualquier %</option>
                        <option value="1">45% - 50%</option>
                        <option value="2">50% - 60%</option>
                        <option value="3">60% - 70%</option>
                        <option value="4">70% - 80%</option>
                        <option value="5">80% - 90%</option>
                        <option value="6">90% - 100%</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input name="imprimante_espesor" type="number" class="form-control" id="floatingInputGroup1">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                <div class="form-floating float-eps">
                        <input name="imprimante_desperdicio" value="30" type="number" class="form-control" id="floatingInputGroup1">
                        <label for="floatingInputGroup1">Desperdicio (%)</label>
                    </div>
                    
                </div>

                <div class="input-group producto mb-2">
                    <label class="input-group-text amp" for="select_imprimante"><strong>Producto</strong></label>
                    <select name="imprimante" class="form-select" id="select_imprimante" required>
                        
                    </select>
                </div>
            </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h2><strong>Capa de Barrera</strong></h2>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <div class="input-group barrera">
                <span class="input-group-text"><strong>Capa de Barrera</strong></span>
                <div class="row">
                    <select class="form-select" id="select_tipobar">
                        <option value="0" selected>Tipo</option>
                        <option value="0">Cualquier Tipo</option>
                        <option value="1">Barrera</option>
                        <option value="2">Autoimprimante</option>
                        <option value="3">Especial</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input name="barrera_espesor" type="number" class="form-control" id="floatingInputGroup1">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                <div class="form-floating float-eps">
                    <input value="30" type="number" name="barrera_desperdicio" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Desperdicio (%)</label>
                    </div>
                </div>
                <div class="input-group producto mb-2">
                    <label class="input-group-text amp" for="select_barrera"><strong>Producto</strong></label>
                    <select name="barrera" class="form-select" id="select_barrera" required>
                        <option selected disabled></option>

                    </select>
                </div>
            </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <h2><strong>Capa de Acabado</strong></h2>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><div class="input-group ">
                <span class="input-group-text"><strong>Capa de Acabado</strong></span>
                <div class="row">
                    <select class="form-select" id="select_tipobase">
                        <option value="0" selected>Tipo</option>
                        <option value="0">Cualquier Tipo</option>
                        <option value="1">Alquidica</option>
                        <option value="2">Epóxica</option>
                        <option value="3">Poliuretano</option>
                        <option value="4">Acrílica</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input type="number" name="acabado_espesor" class="form-control" id="floatingInputGroup1">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating float-eps">
                    <input name="acabado_desperdicio" value="30" type="number" class="form-control" id="floatingInputGroup1">
                        <label for="floatingInputGroup1">Desperdicio (%)</label>
                    </div>
                </div>
                <div class="input-group producto mb-2">
                    <label class="input-group-text " for="select_acabado"><strong>Producto</strong></label>
                    <select name="acabado" class="form-select" id="select_acabado" required>
                        <option selected disabled></option>

                    </select>
                </div>
            </div>
        </div>
    </div>
  </div>

<br><br>

<div class="container">
	    <div class="row">
		    <div class="cancelar col-md-6">
			    <div class="cancel d-grid gap-2">
                    <a class="btn btn-danger" href="home.php?pag_actual=inicio">Cancelar</a>
			    </div>
		    </div>
            <div class="agregar col-md-6">
			    <div class="agrega d-grid gap-2">
				    <button class="btn btn-succes" type="submit">Generar Tabla</button>
        	    </div>
		    </div>
	    </div>
    </div>

<br><br><br><br>


</div>






               















        </form>
    </div>

    
            
            <!---------------------------------------------------------------------------------->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

    <?php include("template/pie.php"); ?>