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
    $consulta = "SELECT uso FROM normas Where entidad = '$nit' GROUP BY uso";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if (mysqli_num_rows($resultado) > 0 ) {
        ?>
        <label class="input-group-text amp " for="select_uso"><strong>Uso</strong></label>  
        <select name="select_uso" class="form-select" id="select_uso" required>
            <option selected disabled></option>
            <?php
            while ($uso = mysqli_fetch_array( $resultado)) {
                echo "<option value='".$uso[0]."'>".$uso[0]."</option>";
            }
            ?>             
        </select>
        <?php

    }
}
?>
