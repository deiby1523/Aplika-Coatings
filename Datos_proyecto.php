<?php include("template/encabezado.php"); ?>

        <h1 class="titleDato">Solicitud de sistema general</h1>

        <hr class="separador">


    <div class="container">
        <form method='POST' class='form-control form-data' action='sistemas.php'>

            <div class="input-group texting">
                <span class="input-group-text">Información de la Empresa</span>
                <div class="row">
                    <input type="text" aria-label="First name" placeholder="Nit" class="form-control">
                    <input disabled type="text" aria-label="Last name" placeholder="Nombre " class="form-control disabled">
                </div>
                <div class="row">
                    <input disabled type="text" aria-label="Last name" placeholder="Direccion" class="form-control disabled">
                    <input disabled type="text" aria-label="Last name" placeholder="Telefono" class="form-control disabled">
                    
                </div>
            </div>
            <br>
            <div class="input-group add mb-2">
                <label class="input-group-text " for="inputGroupSelect01">Asesor</label>
                <select class="form-select" id="inputGroupSelect01" require>
                  <option selected disabled></option>
                  <option value="1">sergio</option>
                  <option value="2">deiby</option>
                  <option value="3">jovani</option>
                </select>
            </div>
            <div class="input-group add mb-2">
                <label class="input-group-text" for="inputGroupSelect01">Marca</label>
                <select class="form-select" id="inputGroupSelect01" require >
                  <option selected disabled></option>
                  <option value="1">xxx</option>
                  <option value="2">xxx</option>
                  <option value="3">xxx</option>
                </select>
            </div>

                <h2 >Capa de imprimación</h2>

            <div class="input-group imprimacion">
                <span class="input-group-text">Capa de imprimación</span>
                <div class="row">
                    <select class="form-select " id="inputGroupSelect01" require>
                        <option selected disabled>Porcentaje de Solidos</option>
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



        </form>
    </div>

    
            
            <!---------------------------------------------------------------------------------->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

    <?php include("template/pie.php"); ?>