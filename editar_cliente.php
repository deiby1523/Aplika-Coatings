<?php include("template/encabezado.php");?>

<h1>Formulario de cliente</h1>

<hr class="separador">


<form action="">
    <div class="container">
        <div class="row g-2 form-client">
            <div class="col-md">
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInputGrid">
                <label for="floatingInputGrid" required>NIT</label>
              </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid">
                    <label for="floatingInputGrid">Cliente</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client" >
            <div class="col-md">
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInputGrid">
                  <label for="floatingInputGrid">Telefono</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid">
                    <label for="floatingInputGrid">Correo</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client">
            <div class="col-md">
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInputGrid">
                  <label for="floatingInputGrid">Departamento</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInputGrid">
                    <label for="floatingInputGrid">Ciudad</label>
                </div>
            </div>
        </div>


        <div class="row form-client">
            <div class="col-md">
                <div class="form-floating">
                   <input type="email" class="form-control" id="floatingInputGrid">
                   <label for="floatingInputGrid">Dirección</label>
                </div>
            </div>
        </div>
    </div>
</form>


<?php include("template/pie.php");?>