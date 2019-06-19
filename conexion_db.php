<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Error al conectar la base de datos: ") . $conn->connect_error;
    }

    echo "Conexion exitosa a la base de datos!<br>";

?>