<?php

  include './../conexion.php';

  $query = "SELECT * FROM ".$_COOKIE['tipo']." WHERE boleta = ".$_COOKIE['boleta'];
  $result = $conexion->query($query);
  $row = $result->fetch_assoc();

  $alum = "SELECT * FROM Alumno WHERE grupo = ".$row['grupo'];
  $ralum = $conexion->query($alum);
  $alumGrupo = $ralum->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>

    <style>
        
        :root {
            --color-primario: #4361ee;
            --color-secundario: #3a0ca3;
            --color-fondo: #f8f9fa;
            --color-texto: #2b2d42;
            --color-borde: #dee2e6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            overflow-x: auto;
        }

        h1 {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        h1 i {
            color: var(--color-secundario);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        thead {
            background: linear-gradient(135deg, var(--color-primario), var(--color-secundario));
            color: white;
        }

        th {
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 500;
            position: sticky;
            top: 0;
        }

        tbody tr {
            border-bottom: 1px solid var(--color-borde);
            transition: all 0.2s;
        }

        tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }

        td {
            padding: 12px 15px;
        }

        /* Efecto zebra para filas */
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(even):hover {
            background-color: rgba(67, 97, 238, 0.05);
        }

        /* Badge para la boleta */
        td:first-child {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            color: var(--color-secundario);
        }

        /* Responsive */
        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th, td {
                min-width: 120px;
            }
        }

        /* Botón de regreso opcional */
        .btn-regresar {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: var(--color-primario);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .btn-regresar:hover {
            background-color: var(--color-secundario);
            transform: translateY(-2px);
        }
    </style>
    

</head>
<body>
  
    <div class="container">
        <h1>Grupo: <?php echo $row['grupo']; ?></h1>
        <table>
        <thead>
            <tr>
            <th>Boleta</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumGrupo as $alumno): ?>
            <tr>
                <td><?php echo $alumno['boleta']; ?></td>
                <td><?php echo $alumno['nombre']; ?></td>
                <td><?php echo $alumno['ap_Pat']; ?></td>
                <td><?php echo $alumno['ap_Mat']; ?></td>
                <td><?php echo $alumno['correo']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>

</body>
</html>