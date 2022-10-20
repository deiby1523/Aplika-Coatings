<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Aplika <?php echo $_GET['pag_actual'] ?></title>
    
    <!-- link icon pestaña -->
    <link rel="icon" href="./img/favicon.png"></link>

    <!-- link estilos  -->
    <link rel="stylesheet" href="../styles/style.css">

    <!-- link fuente  -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Charis+SIL&family=Poppins:wght@100&display=swap" rel="stylesheet">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- script de switAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script de Jquery -->
    
    
    <!-- fontwamesomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
$Inicio = "Inicio";
$Productos = "Productos";
$Clientes = "Clientes";
$Solicitud = "Solicitud";

if (!isset($_GET['pag_actual'])) {
    $_GET['pag_actual'] = $Inicio;
}

$Pagina = $_GET['pag_actual'];


?>


<header>
        <nav class="menu">
            <img src="../img/logoAPK.png" href="home.php?pag_actual=Inicio">
            <ul><!---------------------------------->
                <li><a class="underline" <?php if($Pagina == $Inicio) { echo ("style='color: #F28E2A;'"); } ?> href="home.php?pag_actual=Inicio"><i class="fa-solid fa-house"></i>&nbspInicio</a></li>
                <li><a class="underline" <?php if($Pagina == $Clientes) { echo ("style='color: #F28E2A;'"); } ?> href="cliente.php?pag_actual=Clientes"><i class="fa-solid fa-users"></i>&nbspClientes</a></li>
                <li><a class="underline" <?php if($Pagina == $Solicitud) { echo ("style='color: #F28E2A;'"); } ?> ><i class="fa-solid fa-angle-down"></i>&nbspSistemas</a>
            
                <ul class="menu-vertical">
                    <li><a class="underline" <?php if($Pagina == $Solicitud) { echo ("style='color: #F28E2A;'"); } ?> href="Datos_proyecto.php?pag_actual=Solicitud">Generales</a></li>
                    <li><a class="underline" href="#">Especificos</a></li>
                </ul>
            
            
            </li>
                <li><a class="underline" href="cerrar_sesion.php">Salir &nbsp<i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
</header>
</body>
</html>
