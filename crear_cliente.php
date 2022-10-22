<?php include("template/encabezado.php");?>

<h1>Crear nuevo cliente</h1>

<hr class="separador">


<form action="guardar_cliente.php" METHOD="POST">
    <div class="container">
        <div class="row g-2 form-client">
            <div class="col-md-10">
              <div class="form-floating">
                <input type="text" class="form-control" name="nit" id="floatingInputGrid" required>
                <label for="floatingInputGrid">NIT</label>
              </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="dig" required>
                    <label for="floatingInputGrid">digito de verificación</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client" >
            <div class="col-md">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInputGrid" name="nombre" required>
                  <label for="floatingInputGrid">Nombre</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="tel" required>
                    <label for="floatingInputGrid">Telefono</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client">
            <div class="col-md">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInputGrid" name="correo" required>
                  <label for="floatingInputGrid">Correo</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="dep" required>
                    <label for="floatingInputGrid">Departamento</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="ciudad" required>
                    <label for="floatingInputGrid">Ciudad</label>
                </div>
            </div>
        </div>


        <div class="row form-client" style="height: 100px;">
            <div class="col-md">
                <div class="form-floating">
                   <input style="height: 100px;"type="text" class="form-control" id="floatingInputGrid" name="dir" required>
                   <label for="floatingInputGrid">Dirección</label>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
        <div class="col-md-6">
			<div class="input-group mb-3">
			  <!--<input type="text" class="form-control" placeholder="Buscar cliente" aria-label="Recipient's username" aria-describedby="button-addon2">
			  <button disabled class="btn btn-outline-secondary" type="button" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></button>
                -->
            </div>
		</div>
        <div class="col-md-6">
			<div class="d-grid gap-2">
				<button class="btn btn-succes" type="submit" style="background-color: #ff7c00; color:white; float: right">Crear Cliente</button>
        	</div>
		</div>
        </div>
    </div>
</form>
<br><br><br>


<?php include("template/pie.php");?>