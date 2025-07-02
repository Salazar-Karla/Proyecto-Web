<?php

    include 'conexion.php';

    $boleta = $_POST['boleta'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];
    $minutos = 60;

    $query = "SELECT * FROM $tipo WHERE boleta = $boleta AND contraseña = '$password'";
    $result = $conexion->query($query);
    echo "<h1>Iniciando sesión...</h1>";

    if (mysqli_num_rows($result) > 0) {

        $row = $result->fetch_assoc();
        setcookie("nombre", $row['nombre'], time() + (60*$minutos), "/");
        setcookie("boleta", $row['boleta'], time() + (60*$minutos), "/");
        setcookie("tipo", $tipo, time() + (60*$minutos), "/");
        header("Location: ./$tipo/$tipo.php");

    }
    
    else {
        header("Location: ./newMenu/main.php");
    }

    mysqli_close($conexion);

?>