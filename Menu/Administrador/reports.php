<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reportes</title>
    
    <style>
        /* Variables de diseño */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --accent: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        /* Contenedor principal */
        .report-container {
            width: 100%;
            max-width: 700px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 2.5rem;
            margin: 1rem;
        }

        /* Encabezado */
        .h1 {
            color: var(--primary-dark);
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary);
            font-size: 2rem;
            position: relative;
        }

        h1::after {
            position: absolute;
            right: 0;
            top: 0;
        }

        /* Formulario */
        .report-form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        /* Grupos de campos */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        label {
            font-weight: 500;
            color: var(--gray);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        label::before {
            font-size: 1.1rem;
        }

        /* Campos de formulario */
        select,
        input,
        textarea {
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            width: 100%;
        }

        select:focus,
        input:focus,
        textarea:focus {
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

        /* Textarea */
        textarea {
            resize: vertical;
            min-height: 150px;
            font-family: inherit;
            line-height: 1.5;
        }

        /* Botón */
        .submit-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.9rem 1.8rem;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 0.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .submit-btn::before {
            font-size: 1.1rem;
        }

        /* Responsive */
        @media (max-width: 600px) {
            body {
                padding: 1rem;
            }
            
            .report-container {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 1.6rem;
            }
        }

        /* Validación */
        input:invalid,
        select:invalid,
        textarea:invalid {
            border-color: #ff6b6b;
        }

        input:invalid:focus,
        select:invalid:focus,
        textarea:invalid:focus {
            box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.2);
        }
    </style>

</head>
<body>
    <div class="report-container">
        <h1 class="h1">Generar Reporte</h1>
        
        <form class="report-form" action="reportes.php" method="post">
            <div class="form-group">
                <label for="tipo">Tipo de reporte:</label>
                <select id="tipo" name="tipo" required>
                    <option value="" disabled selected>Seleccione un tipo</option>
                    <option value="alumno">Alumno</option>
                    <option value="profesor">Profesor</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="fechaInicio">Fecha de inicio:</label>
                <input type="date" id="fechaInicio" name="fechaInicio" required>
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripción del reporte:</label>
                <textarea id="descripcion" name="descripcion" placeholder="Escribe aquí una descripción detallada del reporte..." required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Generar Reporte</button>
        </form>
    </div>

    <script>
        // Establecer fecha mínima/máxima
        document.addEventListener('DOMContentLoaded', function() {
            const fechaInput = document.getElementById('fechaInicio');
            const hoy = new Date().toISOString().split('T')[0];
            
            // Establecer fecha máxima como hoy
            fechaInput.max = hoy;
            
            // Opcional: Establecer fecha por defecto (hoy)
            fechaInput.value = hoy;
        });
    </script>
    
</body>
</html>