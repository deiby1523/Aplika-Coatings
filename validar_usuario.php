<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $username = $_POST['username'];
  $password = $_POST['password'];
   
# Conexion con la base de datos --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
   
  // Consulta segura para evitar inyecciones SQL.
  $consulta = "SELECT * FROM user WHERE username='$username' AND password= '$password'";
  $resultado = mysqli_query($conexion,$consulta);
   
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el username del usuario.
    $_SESSION['username'] = $username;
     
    // Redirecciono al usuario a la página principal del sitio.
    //header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: home.php"); 
  }else{
    echo 'El username o password es incorrecto, <a href="index.php">vuelva a intenarlo</a>.<br/>';
  }
 
?>