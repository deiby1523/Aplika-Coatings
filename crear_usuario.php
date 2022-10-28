<?php include("template/encabezado.php");?>

<h1>Crear Usuario</h1>
<hr class="separador">

<!------------------------------------------------------ formulario --------------------------------------------------------------------------------->
<form action="guardar_usuario.php" method="POST">
    <div class="container">
        <div class="row g-2">
            <div class="form-floating ">
                <input name="nombre" type="text" class="form-control" required  autocomplete="off">
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating">
                <input name="username" type="text" class="form-control" required autocomplete="off">
                <label for="floatingInput">Usuario</label>
            </div>

            <div class="form-floating">
                <input name="password" type="password" class="form-control" required autocomplete="off">
                <label for="floatingInput">Contraseña</label>
            </div>
        </div>
        <br><br>

        <div class="row button_cancelarCliente">
            <div class="col-md-6">
                <div class="d-grid gap-2">
		    		<a class="btn btn-danger" href="home.php">Cancelar</a>
            	</div>
		    </div>
            <div class="col-md-6">
		    	<div class="d-grid gap-2">
		    		<button class="btn btn-succes" type="submit">Crear Usuario</button>
            	</div>
		    </div>
        </div>





    </div>
</form>

<?php include("template/pie.php");?>