<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apPat = $_POST['apPat'];
    $apMat = $_POST['apMat'];
    $tipo = $_POST['tipo'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $boleta = strval(mt_rand(100000000, 999999999));

    $query = "INSERT INTO Alumno (nombre, ap_Pat, ap_Mat, boleta, correo, contraseña) VALUES ('$nombre', '$apPat', '$apMat', $boleta, '$email', '$password')";
    if ($conexion->query($query) === TRUE) {
        echo "Usuario creado exitosamente. Boleta: $boleta";
        header("Location: ./newMenu/main.php");
    } else {
        echo "Error al crear el usuario: " . $conexion->error;
    }

    $conexion->close();

?>

