<?php
session_start();
if(!isset($_SESSION["username"])) {
    Header('Location: index.php');
}
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link estilos  -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- link fuente  -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Charis+SIL&family=Poppins:wght@100&display=swap" rel="stylesheet">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <title>APK</title>
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
            <img src="img/logoAPK.png" alt="">
            <ul><!---------------------------------->
                <li><a class="underline" <?php if($Pagina == $Inicio) { echo ("style='color: orange;'"); } ?> href="home.php?pag_actual=Inicio">Inicio</a></li>
                <li><a class="underline" <?php if($Pagina == $Productos) { echo ("style='color: orange;'"); } ?> href="producto.php?pag_actual=Productos">Productos</a></li>
                <li><a class="underline" <?php if($Pagina == $Clientes) { echo ("style='color: orange;'"); } ?> href="client.php?pag_actual=Clientes">Clientes</a></li>
                <li><a class="underline" <?php if($Pagina == $Solicitud) { echo ("style='color: orange;'"); } ?> href="Datos_proyecto.php?pag_actual=Solicitud">Solicitud</a></li>
                <li><a class="underline" href="cerrar_sesion.php">Salir</a></li>
            </ul>
        </nav>
</header>
        