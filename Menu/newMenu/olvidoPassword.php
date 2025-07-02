<?php

    include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    
    <link rel="stylesheet" href="./styles/passForgot.css">k

</head>
<body>
    <header>
        <h1>Recuperar Contraseña</h1>
    </header>
    
    <div class="recovery-container">
        <p class="instructions">Ingresa tu correo electrónico registrado y te enviaremos un enlace para restablecer tu contraseña.</p>
        
        <form method="post" action="./../sendMail.php">

            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <button type="submit" class="submit-btn">Enviar enlace de recuperación</button>
        </form>
        
        <div class="success-message" id="successMessage">
            ¡Listo! Si este correo está registrado, recibirás un enlace para restablecer tu contraseña.
        </div>
        
        <div class="back-link">
            <a href="./Menu.php">« Volver al inicio de sesión</a>
        </div>
    </div>
    
</body>
</html>