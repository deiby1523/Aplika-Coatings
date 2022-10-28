<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $username = $_POST['username'];
  $password = $_POST['password'];
   
# Conexion con la base de datos --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$db = 'recubrimientos';
$host = 'localhost';
$db_username = 'root';
$db_password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $db_username, $db_password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
   
  // Consulta segura para evitar inyecciones SQL.
  $consulta = "SELECT * FROM user WHERE username='$username' AND password=SHA2('$password',256)";
  $resultado = mysqli_query($conexion,$consulta);
  $usuario = mysqli_fetch_array($resultado);

  
    
      if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['username'] = $usuario['nombre'];
        $_SESSION['user_rol'] = $usuario['rol'];
        header("Location: home.php"); 
    } else{
        header("location: index.php?error=true");
    }
  

 
?>


