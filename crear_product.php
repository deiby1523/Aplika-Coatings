<?php include("template/encabezado.php");?>

<h1>Formulario de Creación de Productos</h1>
<hr class="separador">

<!--------------------------------------------------------- crear producto   ---------------------------------------------------------------------------------->
<form action="">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="text form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Referencia</label>
                    </div>
                </div>
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Producto</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <select class="select form-select form-select-lg" aria-label=".form-select-lg example">
                        <option selected>Marca</option>
                        <option value="1">Sika</option>
                        <option value="2">International Paint</option>
                    </select>
                </div>
                <div class="row">
                    <select class="select form-select form-select-lg " aria-label=".form-select-lg example">
                        <option selected>Tipo</option>
                        <option value="1">AB</option>
                        <option value="2">M</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                    <div class="row">
                        <div class="text form-floating">
                            <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                            <label for="floatingInput">Presentación</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Unidad" required  autocomplete="off">
                            <label for="floatingInput">Unidad</label>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <select class="select form-select form-select-lg "  aria-label=".form-select-lg example">
                            <option selected>Capa</option>
                            <option value="1">Autoimprimante</option>
                            <option value="2">Imprimante</option>
                            <option value="3">Barrera</option>
                            <option value="4">Acabado</option>
                        </select>
                </div>
                <div class="row">
                    <select class="select form-select form-select-lg " aria-label=".form-select-lg example">
                        <option selected>Resina</option>
                        <option value="1">Epoxica</option>
                        <option value="2">Epoxifenolica</option>
                        <option value="3">Poliuretano</option>
                        <option value="4">Acrilica</option>
                        <option value="5">Alquidica</option>
                        <option value="6">Organica</option>
                        <option value="7">Silicato de Etilo</option>
                        <option value="8">Fenolica</option>
                        <option value="9">Base de Agua</option>
                        <option value="10">Sintetica</option>
                        <option value="11">Vinilica</option>
                        <option value="12">Silicato de Zinc</option>
                        <option value="13">Siliconado</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="text form-floating" >
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Relación mezcla</label>
                    </div>
                </div>
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Solidos</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <select class="select form-select form-select-lg " aria-label=".form-select-lg example">
                        <option selected>Endurecedor</option>
                        <option value="1">Amina</option>
                        <option value="2">Poliamida</option>
                        <option value="3">Poliaminoamida</option>
                        <option value="4">Mannich</option>
                        <option value="5">Poliamina</option>
                        <option value="6">Isocianato</option>
                        <option value="7">Silano</option>
                        <option value="8">Etilendiamina</option>
                        <option value="9">Xileno</option>
                        <option value="10">Morfolinopropilamina</option>
                        <option value="11">Humedad</option>
                        <option value="12">....</option>
                    </select>
                </div>
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Disolvente</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Eps(Mils)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Secado</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Vide de la Mezcla</label>
                    </div>
                </div>
                <div class="row">
                    <div class="text form-floating">
                        <input type="text" class="form-control"  id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                        <label for="floatingInput">Prepación superficie</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
	    <div class="row">
		    <div class="cancelar col-md-6">
			    <div class="cancel d-grid gap-2">
                    <a class="btn btn-danger" href="home.php?pag_actual=inicio">Cancelar</a>
			    </div>
		    </div>
            <div class="agregar col-md-6">
			    <div class="agrega d-grid gap-2">
				    <button class="btn btn-succes" type="submit">Crear Producto</button>
        	    </div>
		    </div>
	    </div>
    </div>

</form>




<?php include("template/pie.php");?>