<?php include("template/encabezado.php"); ?>


        <form method='POST' class='form-control form-data' action='sistemas.php'>
            <div class="row">
                <div class="row row-paket">

                    <div class="col-2">
                        <label for="proyecto_name" class="col-form-label">Nombre del Proyecto</label>
                    </div>

                    <div class="col-3">
                        <input type="text" id="proyecto_name" name="proyecto_name" class="form-control">
                    </div>

                </div>

                <div class="row row-paket2">                    
                    <div class="col-2">
                        <label for="empresa_nit" style="padding-top:10px;">NIT</label>
                    </div>
                    <div class="col-3 paket">
                        <div class="input-group mb-3">
                            <input type="text" id="empresa_nit" class="form-control" name="empresa_nit">
                            <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row row-paket3">
                    <div class="col-2">
                        <label for="empresa_name" class="col-form-label">Empresa</label>
                    </div>

                    <div class="col-4">
                        <input type="text" id="empresa_name" class="form-control" name="empresa_name">
                    </div>
                </div>

            </div>

            
           <hr class="separador">
            <!---------------------------------------------------------------------------------->

            <div class="row tb-tableGeneral">
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
        </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

    <?php include("template/pie.php"); ?>