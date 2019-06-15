
<?php

    $id_paciente = $nombre_paciente = $apellido_paterno = $apellido_materno = $curp = $telefono = 
    $fecha_nacimiento = $estado_civil = $nacionalidad = null;


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Paciente</title>
</head>

<body>
    <h1>Registro de Paciente</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    
        <label for="id_paciente">ID Paciente:  </label><input type="text" name="id_paciente" id="id_paciente"><br><br>
        <label for="nombre_paciente">Nombre:  </label><input type="text" name="nombre" id="nombre_paciente" placeholder="Escriba su nombre"><br><br>
        <label for="apellido_paterno">Apellido Paterno:  </label><input type="text" name="apellido_paterno" id="apat"><br><br>
        <label for="apellido_materno">Apellido Materno:  </label><input type="text" name="apellido_materno" id="amat"><br><br>
        <label for="curp">CURP:  </label><input type="text" name="curp" id="curp"><br><br>
        <label for="tel">Telefono:  </label><input type="text" name="tel" id="tel"><br><br>
        <label for="fnac">Fecha de Nacimiento:  </label><input type="date" name="fnac" id="fnac"><br><br>
        <label for="estciv">Estado Civil: </label>
        <select name="estciv" id="estciv">
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Union Libre">Union Libre</option>
        </select><br><br>
        <label for="nac">Nacionalidad:  </label><input type="text" name="nac" id="nac"><br><br>

        <input type="submit" value="Guardar">

    </form>    

    <?php
        echo $_POST['id_paciente'];


    ?>



</body>

</html>