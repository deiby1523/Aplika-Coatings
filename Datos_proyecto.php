<?php include("template/encabezado.php"); ?>

        <h1>Solicitud de sistema general</h1>

        <hr class="separador">


    <div class="container">
        <form method='POST' class='form-control form-data' action='sistemas.php'>

            <div class="input-group">
                <span class="input-group-text">Información de la Empresa</span>
                <div class="row">
                    <input type="text" aria-label="First name" placeholder="Nit" class="form-control">
                    <input disabled type="text" aria-label="Last name" placeholder="Razon Social" class="form-control">
                </div>
                <div class="row">
                    <input disabled type="text" aria-label="Last name" placeholder="Direccion" class="form-control">
                    <input disabled type="text" aria-label="Last name" placeholder="Telefono" class="form-control">
                    <!--  -->
                </div>
            </div>
            <br>
            <div class="input-group mb-2">
                <label class="input-group-text" for="inputGroupSelect01">Asesor</label>
                <select class="form-select" id="inputGroupSelect01" require>
                  <option selected disabled></option>
                  <option value="1">sergio</option>
                  <option value="2">deiby</option>
                  <option value="3">jovani</option>
                </select>
            </div>
            <div class="input-group mb-2">
                <label class="input-group-text" for="inputGroupSelect01">Marca</label>
                <select class="form-select" id="inputGroupSelect01" require>
                  <option selected disabled></option>
                  <option value="1">xxx</option>
                  <option value="2">xxx</option>
                  <option value="3">xxx</option>
                </select>
            </div>

            <br><br>
                <h2>Capa de imprimación</h2>
            <br>
            <div class="input-group">
                <span class="input-group-text">Capa de imprimación</span>
                <div class="row">
                    <select class="form-select" id="inputGroupSelect01" require>
                        <option selected disabled>Tipo</option>
                        <option value="1">xxx</option>
                        <option value="2">xxx</option>
                        <option value="3">xxx</option>
                    </select>
                    <input disabled type="text" aria-label="Last name" placeholder="EPS" class="form-control">
                </div>
                <div class="row">
                    <input disabled type="text" aria-label="Last name" placeholder="Desperdicio" class="form-control">
                    <input disabled type="text" aria-label="Last name" placeholder="Area" class="form-control">
                </div>
            </div>
        </form>
    </div>

    
            
            <!---------------------------------------------------------------------------------->

            <div hidden class="row tb-tableGeneral">
                <table class="table">
                    <thead">
                        <th >Código</th>
                        <th>Producto</th>
                        <th>Presentacion</th>
                        <th>Solidos % </th>
                        <th>EPS(Mils) </th>
                        <th>Rendimiento Teórico</th>
                        <th>Rendimiento Práctico</th>
                        <th>Precio/m2</th>
                        <th>Desperdicio</th>
                        <th>Precio/Galon(Activado)</th>
                        <th>Area</th>
                        <th>Cantidad de galones</th>
                        <th>Valor unidad</th>
                        <th>Valor total<th>
                        <th>DTO</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="camp-input_Code">
                                <input class="camp-input">
                            </td>
                            <td class="camp_name-product" style="width: 10%;"></td>
                            <td></td>
                            <td></td>
                            <td>
                                <input class="camp-input">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <input class="camp-input">
                            </td>
                            <td></td>
                            <td>
                                <input class="camp-input">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <input class="camp-input">
                            </td>
                        </tr>
                </table>
            </div>
            <!-- Datos del Proyecto ----------------------------------------------------------->
            
                <div class="row">
                    <div class="col-md-12 container-button">
                        <button type="submit" class="btn btn-primary btn-md-4" name="submit">Siguiente</button>
                    </div>
                     
                </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

    <?php include("template/pie.php"); ?>