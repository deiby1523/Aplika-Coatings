<?php

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");
if(!isset($_POST['uso'])) {
    $_POST['uso'] = "";
}
if($_POST['uso'] != "") {
    $uso = $_POST['uso'];
    $nit = $_POST['nit'];

    $consulta = "SELECT temperatura_min, temperatura_max FROM normas Where entidad = '$nit' AND uso = '$uso' AND temperatura_min IS NOT NULL AND temperatura_max IS NOT NULL ORDER by temperatura_min ASC";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        ?>
        <label class="input-group-text amp " for="select_temperatura"><strong>Temperatura</strong></label>  
        <select name="select_temperatura" class="form-select" id="select_temperatura" required>
            <option selected></option>
            <?php
            while ($temperatura = mysqli_fetch_array($resultado)) {
                echo "<option value='".$temperatura['temperatura_max']."'>".$temperatura['temperatura_min']."°C"."     a     ".$temperatura['temperatura_max']."°C"."</option>";
            }
            ?>             
        </select>
        <?php

    } else {
        ?>
        <select hidden name="select_temperatura" class="form-select" id="select_temperatura" required>  
            <option value="" selected></option>     
        </select>
        <?php
    }
}
?>
