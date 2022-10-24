<?php include("template/encabezado.php");?>

<h1>Crear Usuario</h1>
<hr class="separador">

<!------------------------------------------------------ formulario --------------------------------------------------------------------------------->
<form action="">
    <div class="container">
        <div class="row g-2">
            <div class="form-floating ">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required autocomplete="off">
                <label for="floatingInput">Usuario</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" required autocomplete="off">
                <label for="floatingInput">Contraseña</label>
            </div>
        </div>

        <div class="row button_cancelarCliente">
            <div class="col-md-6">
                <div class="d-grid gap-2">
		    		<a class="btn btn-danger" href="home.php">Cancelar</a>
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