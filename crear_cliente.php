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
                    <input type="number" class="form-control" id="floatingInputGrid" name="dv">
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


        <div class="row form-client div_direccion">
            <div class="col-md">
                <div class="form-floating">
                   <input type="text" class="form-control" id="floatingInputGrid" name="dir" required>
                   <label for="floatingInputGrid">Dirección</label>
                </div>
            </div>
        </div>
        
        <div class="row button_cancelarCliente">
            <div class="col-md-6">
                <div class="d-grid gap-2">
		    		<a class="btn btn-danger" href="cliente.php">Cancelar</a>
            	</div>
		    </div>
            <div class="col-md-6">
		    	<div class="d-grid gap-2">
		    		<button class="btn btn-succes" type="submit">Crear Cliente</button>
            	</div>
		    </div>
        </div>
    </div>
</form>


<?php include("template/pie.php");?>