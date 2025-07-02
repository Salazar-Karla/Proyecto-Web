<?php

    include './../../conexion.php';

    $boleta = $_POST['boleta'];
    $tipo = $_POST['tipo'];

    $query = "DELETE FROM $tipo WHERE boleta = $boleta";

    echo "Tipo = $query";

    if($conexion->query($query)) {
        echo "Usuario eliminado exitosamente";
        header("Location: ./../Administrador.php");
    } else {
        echo "Error al eliminar usuario";
        echo "<script>alert('Error al eliminar el usuario: " . $conexion->error . "');</script>";
    }

?>