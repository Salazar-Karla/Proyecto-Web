<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>

    <style>
        /* Variables de color y estilos base */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #f94144;
            --info: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --border-radius: 15px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        /* Contenedor principal */
        .container {
            max-width: 80%;
            margin: 0 auto;
        }

        /* Encabezados */
        .h1 {
            color: var(--primary-dark);
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary);
            font-size: 2.2rem;
        }

        h2 {
            color: var(--dark);
            margin: 2.5rem 0 1.5rem;
            font-size: 1.5rem;
            position: relative;
            padding-left: 1.2rem;
        }

        h2::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 5px;
            background-color: var(--primary);
            border-radius: var(--border-radius);
        }

        /* Sistema de grid para formularios */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
            margin-right: 5px;
        }

        /* Estilos para formularios */
        .form-card {
            background: white;
            padding: 1.8rem;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            border-top: 4px solid;
        }

        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Colores para cada tipo de formulario */
        .create-form {
            border-color: var(--success);
        }

        .edit-form {
            border-color: var(--warning);
        }

        .view-form {
            border-color: var(--info);
        }

        .delete-form {
            border-color: var(--danger);
        }

        /* Estilos para etiquetas y campos */
        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--gray);
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            margin-right: 5px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        /* Select personalizado */
        select {
            appearance: none;
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px;
            padding-right: 2.5rem;
        }

        /* Estilos para botones */
        .btn {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background-color: #d90429;
            transform: translateY(-2px);
        }

        .btn-info {
            background-color: var(--info);
            color: white;
        }

        .btn-info:hover {
            background-color: #3a86ff;
            transform: translateY(-2px);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            body {
                padding: 1rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
        }
    </style>

</head>
<body>

    <div class="container">
        
        <h1 class="h1">Administrar Usuarios</h1>
        
        <div class="form-grid">
            <!-- Formulario para crear usuario -->
            <form action="./changeUsers/crearUsuario.php" method="post" class="form-card create-form">
                <h2>Crear usuario</h2>
                
                <div class="form-group">
                    <label for="boleta">Boleta:</label>
                    <input type="text" id="boleta" name="boleta" required>
                </div>
                
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="password">Apellido paterno:</label>
                    <input type="text" id="ap_Pat" name="ap_Pat" required>
                </div>

                <div class="form-group">
                    <label for="password">Apellido materno:</label>
                    <input type="text" id="ap_Mat" name="ap_Mat" required>
                </div>

                <div class="form-group">
                    <label for="password">Grupo:</label>
                    <input type="text" id="grupo" name="grupo" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Correo:</label>
                    <input type="text" id="correo" name="correo" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="tipo">Tipo de usuario:</label>
                    <select id="tipo" name="tipo">
                        <option value="Alumno" name="Alumno" >Alumno</option>
                        <option value="Profesor" name="Profesor" >Profesor</option>
                        <option value="Administrador" name="Administrador" >Administrador</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Crear Usuario</button>
            </form>

            <!-- Formulario para editar usuario -->
            <form action="./changeUsers/editarUsuario.php" method="post" class="form-card edit-form">
                <h2>Editar usuario</h2>
                
                <div class="form-group">
                    <label for="boleta">Boleta:</label>
                    <input type="text" id="boleta" name="boleta" required>
                </div>
                
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="form-group">
                    <label for="password">Apellido paterno:</label>
                    <input type="text" id="ap_Pat" name="ap_Pat" required>
                </div>

                <div class="form-group">
                    <label for="password">Apellido materno:</label>
                    <input type="text" id="ap_Mat" name="ap_Mat" required>
                </div>

                <div class="form-group">
                    <label for="password">Grupo:</label>
                    <input type="text" id="grupo" name="grupo" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Correo:</label>
                    <input type="text" id="correo" name="correo" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="tipo">Tipo de usuario:</label>
                    <select id="tipo" name="tipo">
                        <option value="Alumno">Alumno</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
            </form>

            <!-- Formulario para consultar usuario -->
            <form action="./changeUsers/consultarUsuario.php" method="post" class="form-card view-form">
                <h2>Consultar usuario</h2>
                
                <div class="form-group">
                    <label for="boletaConsultar">Boleta del usuario a consultar:</label>
                    <input type="text" id="boleta" name="boleta" required>
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo de usuario:</label>
                    <select id="tipo" name="tipo">
                        <option value="Alumno">Alumno</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-info">Consultar Usuario</button>
            </form>

            <!-- Formulario para eliminar usuario -->
            <form action="./changeUsers/eliminarUsuario.php" method="post" class="form-card delete-form">
                <h2>Eliminar usuario</h2>
                
                <div class="form-group">
                    <label for="boletaEliminar">Boleta del usuario a eliminar:</label>
                    <input type="text" id="boleta" name="boleta" required>
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo de usuario:</label>
                    <select id="tipo" name="tipo">
                        <option value="Alumno">Alumno</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
                
            </form>
        
        </div>

    </div>

</body>
</html>