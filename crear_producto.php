<?php include("template/encabezado.php");?>

<h1>Formulario de Creación de Productos</h1>
<hr class="separador">

<!--------------------------------------------------------- crear producto   ---------------------------------------------------------------------------------->
<form action="guardar_producto.php" method="POST">
    <div class="container">

        <div class="row">
            <div class="col">

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="referencia"><strong>Referencia</strong></label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="  Codigo del producto  "  name="referencia" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3 mt-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="select_marca"><strong>Marca</strong></label>
                        <select name="marca" class="form-select" id="select_marca" required>
                            <option selected disabled></option>
                            <option value="Sika">Sika</option>
                            <option value="International Paint">International Paint</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="presentacion"><strong>Presentacion</strong></label>
                        <input type="number" class="form-control" id="floatingInput" placeholder="  (GAL) "  name="presentacion" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3 mt-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="resina"><strong>Resina</strong></label>
                        <select name="resina" class="form-select" required>
                            <option selected disabled></option>
                            <option value="Epoxica">Epoxica</option>
                            <option value="Epoxifenolica">Epoxifenolica</option>
                            <option value="Poliuretano">Poliuretano</option>
                            <option value="Acrilica">Acrilica</option>
                            <option value="Alquidica">Alquidica</option>
                            <option value="Organica">Organica</option>
                            <option value="Silicato de Etilo">Silicato de Etilo</option>
                            <option value="Fenolica">Fenolica</option>
                            <option value="Base de Agua">Base de Agua</option>
                            <option value="Sintetica">Sintetica</option>
                            <option value="Vinilica">Vinilica</option>
                            <option value="Silicato de Zinc">Silicato de Zinc</option>
                            <option value="Siliconado">Siliconado</option>
                            <option value="Otra">Otra</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="relacion_mezcla"><strong>Relacion Mezcla</strong></label>
                        <input type="text" class="form-control" id="floatingInput" name="presentacion" placeholder="  A : B  " style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3 mt-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="endurecedor"><strong>Endurecedor</strong></label>
                        <select name="endurecedor" class="form-select" required>
                            <option selected disabled></option>
                            <option value="Amina">Amina</option>
                            <option value="Poliamida">Poliamida</option>
                            <option value="Poliaminoamida">Poliaminoamida</option>
                            <option value="Mannich">Mannich</option>
                            <option value="Poliamina">Poliamina</option>
                            <option value="Isocianato">Isocianato</option>
                            <option value="Silano">Silano</option>
                            <option value="Etilendiamina">Etilendiamina</option>
                            <option value="Xileno">Xileno</option>
                            <option value="Morfolinopropilamina">Morfolinopropilamina</option>
                            <option value="Humedad">Humedad</option>
                            <option value="No requiere">No requiere</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="disolvente"><strong>Disolvente</strong></label>
                        <input type="text" class="form-control" id="floatingInput" name="disolvente" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3 mt-3" style="width: 100%">
                        <label style="width: 38%;" class="input-group-text amp" for="secado"><strong>Secado</strong></label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="   Tiempo de secado al tacto" name="secado" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

            </div>






            <div class="col">

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <label style="width: 22%;" class="input-group-text amp" for="Producto"><strong>Producto</strong></label>
                        <input type="text" class="form-control" id="floatingInput" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3 mt-3" style="width: 100%">
                        <label style="width: 22%;" class="input-group-text amp" for="tipo"><strong>Tipo</strong></label>
                        <select name="tipo" class="form-select" required>
                            <option selected disabled></option>
                            <option value="AB">Bicomponente</option>
                            <option value="M">Monocomponente</option>
                            <option value="ABC">Tricomponente</option>

                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <label style="width: 22%;" class="input-group-text amp" for="capa"><strong>Capa</strong></label>
                        <select name="capa" class="form-select" required>
                            <option selected disabled></option>
                            <option value="Autoimprimante">Autoimprimante</option>
                            <option value="Imprimante">Imprimante</option>
                            <option value="Barrera">Barrera</option>
                            <option value="Acabado">Acabado</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%">
                        <input type="text" class="form-control" id="floatingInput" name="otra_resina" placeholder="Otra Resina" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%; margin-top: 20px;">
                        <label style="width: 40%;" class="input-group-text amp" for="tipo"><strong>Solidos en Volumen</strong></label>
                        <input type="number" class="form-control" id="floatingInput" name="solidos" placeholder="   %" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%; margin-top:20px">
                        <input type="text" class="form-control" id="floatingInput" name="otro_endurecedor" placeholder="Otra Endurecedor" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3" style="width: 100%; margin-top: 20px;">
                        <label style="width: 45%;" class="input-group-text amp" for="tipo"><strong>Espesor Recomendado</strong></label>
                        <input type="text" class="form-control" id="floatingInput" name="solidos" placeholder="   (Mils)" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>

                <div class="row">
                    <div class="input-group add mb-3 mt-3" style="width: 100%;">
                        <label style="width: 45%;" class="input-group-text amp" for="vida_mezcla"><strong>Vida de la Mezcla</strong></label>
                        <input type="text" class="form-control" id="floatingInput" name="vida_mezcla" style="height: 150%;" required  autocomplete="off">
                    </div>
                </div>


            </div>





        </div> <!-- Row Main -->
        
        <div class="row">
            <div class="input-group add mb-3 mt-3" style="width: 100%">
                <label style="width: 19%;" class="input-group-text amp" for="preparecion_superficie"><strong>Preparación de Superficie</strong></label>
                <input type="text" class="form-control" id="floatingInput" placeholder="   Segun norma NACE-SSPC" name="secado" style="height: 150%;" required  autocomplete="off">
            </div>
        </div> <!-- Row 2 Preparación de superficie -->

        <br><br>

        <div class="row button_cancelarCliente">
            <div class="col-md-6">
                <div class="d-grid gap-2">
		    		<a class="btn btn-danger" href="cliente.php">Cancelar</a>
            	</div>
		    </div>
            <div class="col-md-6">
		    	<div class="d-grid gap-2">
		    		<button class="btn btn-succes" type="submit">Crear Producto</button>
            	</div>
		    </div>
        </div> <!-- Row Boton cancelar y guardar -->
        
        <br><br><br>

    </div> <!-- Container -->

</form>

<?php include("template/pie.php");?>