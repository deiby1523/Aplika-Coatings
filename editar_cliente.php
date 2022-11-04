<?php include("template/encabezado.php");

$id = $_GET['id'];

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
$charset = mysqli_set_charset($conexion, "utf8");



# Consulta de productos desde la base de datos ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "SELECT * FROM clientes Where id = '$id'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$cliente = mysqli_fetch_array($resultado);
#var_dump($cliente);
?>



<h1>Editarcliente</h1>

<hr class="separador">


<form action="actualizar_cliente.php" METHOD="POST">
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <div class="container">
        <div class="row g-2 form-client">
            <div class="col-md-10">
                <div class="form-floating">
                    <input value="<?php echo $cliente['nit']; ?>" type="text" class="form-control" name="nit" id="floatingInputGrid" required>
                    <label for="floatingInputGrid">NIT</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating">
                    <input value="<?php echo $cliente['dv']; ?>" type="number" class="form-control" id="floatingInputGrid" name="dv">
                    <label for="floatingInputGrid">Digito de verificación</label>
                </div>
            </div> 
        </div>

        <div class="row g-2 form-client" >
            <div class="col-md">
                <div class="form-floating">
                  <input value="<?php echo $cliente['nombre']; ?>" type="text" class="form-control" id="floatingInputGrid" name="nombre" required>
                  <label for="floatingInputGrid">Nombre</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input value="<?php echo $cliente['celular']; ?>" type="text" class="form-control" id="floatingInputGrid" name="tel" required>
                    <label for="floatingInputGrid">Telefono</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client">
            <div class="col-md">
                <div class="form-floating">
                  <input value="<?php echo $cliente['correo']; ?>" type="email" class="form-control" id="floatingInputGrid" name="correo" required>
                  <label for="floatingInputGrid">Correo</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input value="<?php echo $cliente['departamento']; ?>" type="text" class="form-control" id="floatingInputGrid" name="dep" required>
                    <label for="floatingInputGrid">Departamento</label>
                </div>
            </div>
        </div>

        <div class="row g-2 form-client">
            <div class="col-md">
                <div class="form-floating">
                    <input value="<?php echo $cliente['ciudad']; ?>" type="text" class="form-control" id="floatingInputGrid" name="ciudad" required>
                    <label for="floatingInputGrid">Ciudad</label>
                </div>
            </div>
        </div>


        <div class="row form-client" style="height: 100px;">
            <div class="col-md">
                <div class="form-floating">
                   <input value="<?php echo $cliente['direccion']; ?>" style="height: 100px;"type="text" class="form-control" id="floatingInputGrid" name="dir" required>
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
				<button class="btn btn-succes" type="submit" style="background-color: #F28E2A; color:white; float: right">Guardar Cambios</button>
        	</div>
		</div>
        </div>
    </div>
</form>
<br><br><br>


<?php include("template/pie.php");?>