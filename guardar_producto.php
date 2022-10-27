<?php

$_GET['pag_actual'] = "Producto";


$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");

#var_dump($_POST);


if (isset($_POST['referencia']) && isset($_POST['marca']) && isset($_POST['presentacion']) && isset($_POST['relacion_mezcla']) && isset($_POST['disolvente']) && isset($_POST['secado']) && isset($_POST['producto']) && isset($_POST['tipo']) && isset($_POST['capa']) && isset($_POST['vida_mezcla']) ) {
    $referencia = $_POST['referencia'];
    $marca = $_POST['marca'];
    $presentacion = $_POST['presentacion'];
    if ($_POST['otra_resina'] != '') {
        $resina = $_POST['otra_resina'];
    } else {
        $resina = $_POST['resina'];

    }
    $relacion_mezcla = $_POST['relacion_mezcla'];
    $disolvente = $_POST['disolvente'];
    $secado = $_POST['secado'];
    $producto = $_POST['producto'];
    $tipo = $_POST['tipo'];
    $capa = $_POST['capa'];
    $solidos = $_POST['solidos'];
    if ($_POST['otro_endurecedor'] != '') {
        $endurecedor = $_POST['otro_endurecedor'];
    } else {
        $endurecedor = $_POST['endurecedor'];

    }
    $espesor_recomendado = $_POST['espesor_recomendado'];
    $vida_mezcla = $_POST['vida_mezcla'];
    $preparacion_superficie = $_POST['preparacion_superficie'];
    $repintabilidad = $_POST['repintabilidad'];
} else {
    header('location: producto.php?msg=error');
} 

# Añadir cliente ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$consulta = "INSERT INTO productos VALUES (null,'$referencia','$marca','$producto','$tipo','$capa','$presentacion','GAL','$relacion_mezcla','$resina','$endurecedor','$solidos','$disolvente','$espesor_recomendado','$vida_mezcla','$secado','$repintabilidad','$preparacion_superficie')";
$productos = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ( $productos ) {
    header('location: producto.php?msg=ok');
}
