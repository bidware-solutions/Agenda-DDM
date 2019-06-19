
<?php

    $id_paciente = $nombre = $apat = $amat = $curp = $tel = $fnac = $estciv = $nac = null;

    function test_input($dato){
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Recibi una requisicion de insercion de datos! Higienizando...<br>";

        $id_paciente = test_input($_POST['id_paciente']);
        $nombre = test_input($_POST['nombre']);
        $apat = test_input($_POST['apat']);
        $amat = test_input($_POST['amat']);
        $curp = test_input($_POST['curp']);
        $tel = test_input($_POST['tel']);
        $fnac = test_input($_POST['fnac']);
        $estciv = test_input($_POST['estciv']);
        $nac = test_input($_POST['nac']);

        
        include("conexion_db.php");

        ### CODIGO EN FASE DE PRUEBAS
        /*
        $consulta_ultimo_id = "SELECT MAX(ID) FROM pacientes";
        $ultimo_id = $conn->query($consulta_ultimo_id);

        if ($ultimo_id->num_rows > 0) {
            while ($row = $ultimo_folio->fetch_assoc()) {
                $id_paciente = $row['ID'];
            }
        } */

        $insert = "INSERT INTO pacientes (ID, Nombre, Apellido_Paterno, Apellido_Materno, CURP, Telefono, Fecha_Nacimiento,
                        Estado_Civil, Nacionalidad) VALUES ('$id_paciente', '$nombre', '$apat', '$amat', '$curp', '$tel', '$fnac',
                            '$estciv', '$nac')";
        
        if($conn->query($insert) === TRUE){
            echo "Datos almacenados con exito!";
        }else
            die("No se pudieron insertar los datos a la tabla... :(") . $conn->error;

        $conn->close();

    }

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
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
    
        <label for="id_paciente">ID Paciente:  </label><input type="text" name="id_paciente" id="id_paciente"><br><br>
        <label for="nombre_paciente">Nombre:  </label><input type="text" name="nombre" id="nombre_paciente" placeholder="Escriba su nombre"><br><br>
        <label for="apellido_paterno">Apellido Paterno:  </label><input type="text" name="apat" id="apellido_paterno"><br><br>
        <label for="apellido_materno">Apellido Materno:  </label><input type="text" name="amat" id="apellido_materno"><br><br>
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

    <br><br>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<hr>";
            echo "<h2>Se insertaron los siguientes datos a la base de datos:</h2>";
    
            echo "ID de paciente: " . $id_paciente . "<br>";
            echo "Nombre del Paciente: " . $nombre . " " . $apat . " " . $amat . "<br>";
            echo "Curp: " . $curp . "<br>";
            echo "Telefono: " . $tel . "<br>";
            echo "Fecha de Nacimiento: " . $fnac . "<br>" ;
            echo "Estado Civil: " . $estciv . "<br>";
            echo "Pais de Origen: " . $nac . "<br>";

        }
    
    
    ?>

</body>

</html>