<?php

$db = 'recubrimientos';
$host = 'localhost';
$username = 'root';
$password = '123456';
$dbname = 'recubrimientos';

$conexion = mysqli_connect( $host, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname) or die ("No se ha podido conectar a la base de datos");

if(isset($_POST['temp']) && isset($_POST['uso']) && isset($_POST['nit'])) { 
    if ($_POST['temp'] == "" && $_POST['uso'] != "" && $_POST['nit'] != "") {
        $uso = $_POST['uso'];
        $nit = $_POST['nit'];
        $consulta = "SELECT sistema FROM normas Where entidad = '$nit' AND uso = '$uso' AND temperatura_max IS NULL AND temperatura_min IS NULL ORDER by sistema ASC";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if (mysqli_num_rows($resultado) > 0 ) {
            ?>
            <label class="input-group-text amp " for="select_sistema"><strong>Sistema</strong></label>  
            <select name="select_sistema" class="form-select" id="select_sistemas" required>
                <option selected></option>
                <?php
                while ($sistema = mysqli_fetch_array( $resultado)) {
                    echo "<option value='".$sistema[0]."'>". $sistema[0]."</option>";
                }
                ?>             
            </select>
            <?php
        }

        } elseif ($_POST['temp'] != "" && $_POST['uso'] != "" && $_POST['nit'] != "") {
            $uso = $_POST['uso'];
            $nit = $_POST['nit'];
            $temp = $_POST['temp'];
            $consulta = "SELECT sistema FROM normas Where entidad = '$nit' AND uso = '$uso' AND temperatura_max = '$temp' ORDER by sistema ASC";
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            if (mysqli_num_rows($resultado) > 0 ) {
                ?>
                <label class="input-group-text amp " for="select_sistema"><strong>Sistema</strong></label>  
                <select name="select_sistema" class="form-select" id="select_sistemas" required>
                    <option selected></option>
                    <?php
                    while ($sistema = mysqli_fetch_array( $resultado)) {
                        echo "<option value='".$sistema[0]."'>". $sistema[0]."</option>";
                    }
                    ?>             
                </select>
                <?php

            }
        }
    }