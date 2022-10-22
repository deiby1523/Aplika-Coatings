<?php include("template/encabezado.php");?>

<h1>CEditarcliente</h1>

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
            <div class="d-grid gap-2">
				<a class="btn btn-danger" href="cliente.php" style="background-color: #b70000; color:white; float: right">Cancelar</a>
        	</div>
		</div>
        <div class="col-md-6">
			<div class="d-grid gap-2">
				<button class="btn btn-succes" type="submit" style="background-color: #F28E2A; color:white; float: right">Crear Cliente</button>
        	</div>
		</div>
        </div>
    </div>
</form>
<br><br><br>


<?php include("template/pie.php");?>