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
$consulta = "SELECT * FROM asesores";
$asesores = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="cliente/cliente.js"></script>
<script src="producto/producto.js"></script>

        <h1 class="titleDato">Solicitud de sistema general</h1>

        <hr class="separador">

    <div class="container">
        <form method='POST' class='form-control form-data' action='sistemas.php'>

            <div class="input-group texting">
                <span class="input-group-text">Información de la Empresa</span>
                <div class="row">
                    <input type="text" aria-label="First name" placeholder="Nit" class="form-control" name="inputnit" id="inputnit">
                    <input disabled type="text" aria-label="Last name" placeholder="Nombre " class="form-control disabled" id="nombre_cliente">
                </div>
                <div class="row">
                    <input disabled type="text" aria-label="Last name" placeholder="Direccion" class="form-control disabled" id="direccion_cliente">
                    <input disabled type="text" aria-label="Last name" placeholder="Telefono" class="form-control disabled" id="telefono_cliente">
                    
                </div>
            </div>
            <br>
            <div class="input-group add mb-2">
                <label class="input-group-text " for="inputGroupSelect01">Asesor</label>
                <select class="form-select" id="inputGroupSelect01" require>
                    <option selected disabled></option>
                    <?php
                    while ($asesor = mysqli_fetch_array( $asesores)) {
                        echo "<option>".$asesor['nombre']."</option>";
                    }
                    ?>
                  
                </select>
            </div>
            <div class="input-group add mb-2">
                <label class="input-group-text" for="select_marca">Marca</label>
                <select class="form-select" id="select_marca" require >
                  <option selected disabled></option>
                  <option value="Sika">Sika</option>
                  <option value="International Paint">International Paint</option>
                </select>
            </div>

                <h2 >Capa de imprimación</h2>


            <div class="input-group imprimacion">
                <span class="input-group-text">Capa de imprimación</span>
                <div class="row">
                    <select class="form-select " id="select_solidos" require>
                        <option selected disabled>Porcentaje de Solidos</option>
                        <option value="1">45% - 50%</option>
                        <option value="2">50% - 60%</option>
                        <option value="3">60% - 70%</option>
                        <option value="4">70% - 80%</option>
                        <option value="5">80% - 90%</option>
                        <option value="6">90% - 100%</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Desperdicio</label>
                    </div>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Area</label>
                    </div>
                </div>

                <div class="input-group producto mb-2">
                    <label class="input-group-text " for="select_imprimante">Producto</label>
                    <select class="form-select" id="select_imprimante" require>
                        <option selected disabled></option>
                    </select>
                </div>
            </div>

            <h2>Capa de Barrera</h2>

            <div class="input-group barrera">
                <span class="input-group-text">  Capa de Barrera  </span>
                <div class="row">
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled>Tipo</option>
                        <option value="1">Zinc inorg</option>
                        <option value="2">Zinc org</option>
                        <option value="3">Epoxifenocol</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Desperdicio</label>
                    </div>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Area</label>
                    </div>
                </div>
                <div class="input-group producto mb-2">
                    <label class="input-group-text " for="inputGroupSelect01">Producto</label>
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled></option>
                        <option value="1">sergio</option>
                        <option value="2">deiby</option>
                        <option value="3">jovani</option>
                    </select>
                </div>
            </div>
            

            <h2>Capa de Acabado</h2>

            <div class="input-group ">
                <span class="input-group-text">  Capa de Acabado  </span>
                <div class="row">
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled>Tipo</option>
                        <option value="1">Zinc inorg</option>
                        <option value="2">Zinc org</option>
                        <option value="3">Epoxifenocol</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Desperdicio</label>
                    </div>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Area</label>
                    </div>
                </div>
                <div class="input-group producto mb-2">
                    <label class="input-group-text " for="inputGroupSelect01">Producto</label>
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled></option>
                        <option value="1">sergio</option>
                        <option value="2">deiby</option>
                        <option value="3">jovani</option>
                    </select>
                </div>
            </div>







            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h2>Capa Acabado.</h2>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

      <div class="input-group ">
                <span class="input-group-text">  Capa de Acabado  </span>
                <div class="row">
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled>Tipo</option>
                        <option value="1">Zinc inorg</option>
                        <option value="2">Zinc org</option>
                        <option value="3">Epoxifenocol</option>
                    </select>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Espesor de pelicula seca</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Desperdicio</label>
                    </div>
                    <div class="form-floating float-eps">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                        <label for="floatingInputGroup1">Area</label>
                    </div>
                </div>
                <div class="input-group producto mb-2">
                    <label class="input-group-text " for="inputGroupSelect01">Producto</label>
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled></option>
                        <option value="1">sergio</option>
                        <option value="2">deiby</option>
                        <option value="3">jovani</option>
                    </select>
                </div>
            </div>


      </div>
    </div>
  </div>
</div>
















        </form>
    </div>

    
            
            <!---------------------------------------------------------------------------------->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

    <?php include("template/pie.php"); ?>