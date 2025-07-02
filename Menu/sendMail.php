<?php

    include 'conexion.php';

    $name = $_POST['email'];

    //mail($name, "Recuperación", "Hola que hace, esto es una prueba de envío de correo electrónico para la recuperación de contraseña.");

    //header("Location: ./newMenu/main.php");

    $to = "hd.gt2005@gmail.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: hd.gt2005@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    $mail = mail($to,$subject,$txt,$headers);

    if($mail) {
        echo "El correo se ha enviado correctamente.";
    }
    
    else {
        echo "Error al enviar el correo.";
    }
    

?>