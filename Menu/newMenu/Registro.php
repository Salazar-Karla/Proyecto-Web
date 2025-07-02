<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    
    <style>

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

header {
    background-color: #1a237e;
    color: white;
    padding: 15px 20px;
    width: 100%;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.registration-container {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 500px;
    margin: 30px 0;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}

input:focus {
    border-color: #5c6bc0;
    outline: none;
    box-shadow: 0 0 0 2px rgba(92,107,192,0.2);
}

.submit-btn {
    background-color: #5c6bc0;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    transition: background-color 0.3s;
}

.selection {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
    background-color: white;
    color: #333;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: border-color 0.3s, box-shadow 0.3s;
}

select:focus {
    border-color: #5c6bc0;
    outline: none;
    box-shadow: 0 0 0 2px rgba(92,107,192,0.2);
}

.submit-btn:hover {
    background-color: #3f51b5;
}

.login-link {
    text-align: center;
    margin-top: 20px;
}

.login-link a {
    color: #5c6bc0;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

    </style>

</head>
<body>
    <header>
        <h1>Registro de Usuario</h1>
    </header>
    
    <div class="registration-container">

        <form id="registrationForm" method="POST" action="./../addUser.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" id="apellidoPaterno" name="apPat" required>
            </div>
            
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" id="apellidoMaterno" name="apMat" required>
            </div>

            <div class="form-group">
                <label for="apellidoMaterno">Tipo de usuario:</label>
                <select class="selection" id="tipo" name="tipo" required>
                    <option>Alumno</option>
                    <option>Profesor</option>
                    <option>Administrador</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="pass" required minlength="8">
            </div>
            
            <button type="submit" class="submit-btn">Registrarse</button>
        </form>
        
        <div class="login-link">
            ¿Ya tienes una cuenta? <a href="./main.php">Inicia sesión aquí</a>
        </div>
    </div>

</body>
</html>