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

    $result = $conexion->query($query);

    if($result) {
        echo "<script>alert('Usuario editado exitosamente');</script>";
        header("Location: ./../Administrador.php");
    } else {header("Location: ./../Administrador.php");
        echo "<script>alert('Error al editar el usuario: " . $conexion->error . "');</script>";
    }

?>