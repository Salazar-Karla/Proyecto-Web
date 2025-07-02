<?php

    include './../../conexion.php';

    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $ap_Pat = $_POST['ap_Pat'];
    $ap_Mat = $_POST['ap_Mat'];
    $grupo = $_POST['grupo'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];

    $query = "INSERT INTO $tipo (nombre, ap_Pat, ap_Mat, boleta, grupo, correo, contraseña) 
              VALUES ('$nombre', '$ap_Pat', '$ap_Mat', $boleta, $grupo, '$correo', '$password')";
            

    echo "Buenas que hace: $query";

    if($conexion->query($query)) {
        echo "Si Jalo XD";
        echo "<script>alert('Usuario creado exitosamente');</script>";
        header("Location: ./../Administrador.php");
    } else {
        echo "Error";
        echo "<script>alert('Error al crear el usuario: " . $conexion->error . "');</script>";
    }

?>