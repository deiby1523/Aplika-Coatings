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
if($_POST['uso'] != "" && $_POST['uso'] != "Refineria") {
    $uso = $_POST['uso'];
    $nit = $_POST['nit'];
    $consulta = "SELECT temperatura_min, temperatura_max FROM normas Where entidad = '$nit' AND uso = '$uso' ORDER by temperatura_min ASC";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        ?>
        <label class="input-group-text amp " for="select_temperatura"><strong>Temperatura</strong></label>  
        <select name="select_temperatura" class="form-select" id="select_temperatura" required>
            <option selected></option>
            <?php
            while ($uso = mysqli_fetch_array( $resultado)) {
                echo "<option value='".$uso['temperatura_max']."'>".$uso['temperatura_min']."°C"."     a     ".$uso['temperatura_max']."°C"."</option>";
            }
            ?>             
        </select>
        <?php

    }
}
?>
