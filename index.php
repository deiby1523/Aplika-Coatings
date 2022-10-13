
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="styles/login.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Aplika Control Corrosion</title>
</head>
<body>
<?php
if(isset($_GET['error'])){
?>
  <script class=".swal-button">
    swal({
  title: "APLIKA",
  text: "Su usuario o contraseña es incorrecto!",
  icon: "error",
  button: "Continuar",
});
  </script>
  <?php
}
?>


<div class="login-box">
  <img class="logoAPK" src="img/logoAPK.png">
  <form method="POST" action="validar_usuario.php">
    <div class="user-box">
      <input type="text" name="username" required="" autocomplete= "off">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
      <button type="submit"><a>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Ingresar
      </a></button>
  </form>
</div>

</body>
</html>