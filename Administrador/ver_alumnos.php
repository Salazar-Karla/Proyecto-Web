<?php
include("conexion.php");
?>

<style>
    .titulo-grupos {
        color: #ff6f00;
        margin-bottom: 30px;
        text-align: center;
        font-size: 2em;
        font-weight: bold;
    }

    .grupos-contenedor {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        padding: 0 40px 0 80px; /* <-- esto lo mueve un poco a la derecha */
        gap: 40px 50px; /* filas: 40px / columnas: 50px */
    }

    .grupo-card {
        background-color: white;
        border: 2px solid #ff6f00;
        border-radius: 12px;
        padding: 20px;
        width: 28%;
        box-shadow: 0 0 10px rgba(255, 165, 0, 0.3);
        min-width: 280px;
        flex-grow: 1;
    }

    .grupo-titulo {
        font-size: 20px;
        font-weight: bold;
        color: #ff6f00;
        margin-bottom: 5px;
    }

    .grupo-profesor {
        margin-bottom: 10px;
        font-weight: bold;
    }

    .alumnos-lista {
        list-style-type: square;
        padding-left: 20px;
        text-align: left;
    }

    .alumnos-lista li {
        margin-bottom: 4px;
        font-weight: bold;
    }

    .btn-regresar {
        display: block;
        margin: 50px auto 0;
        padding: 10px 25px;
        background-color: #ff7043;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-regresar:hover {
        background-color: #e64a19;
    }
</style>

<div style="padding: 25px;">
    <h2 class="titulo-grupos">👨‍🏫 Grupos y Alumnos 👨‍🏫 </h2>

    <div class="grupos-contenedor">
        <?php
        $queryGrupos = "
            SELECT 
                g.ID_Grupo,
                u.nombre AS NombreProfesor,
                u.ap_Pat AS PaternoProfesor,
                u.ap_Mat AS MaternoProfesor
            FROM grupo g
            JOIN profesor p ON g.ID_Profesor = p.ID_Profesor
            JOIN usuario u ON p.ID_Usuario = u.ID_Usuario
            ORDER BY g.ID_Grupo ASC;
        ";

        $resultGrupos = $conn->query($queryGrupos);

        if (!$resultGrupos) {
            echo "<p style='text-align:center; color:red;'>Error en la consulta: " . $conn->error . "</p>";
        } elseif ($resultGrupos->num_rows > 0) {
            while ($grupo = $resultGrupos->fetch_assoc()) {
                $idGrupo = $grupo['ID_Grupo'];
                $nombreProfesor = $grupo['NombreProfesor'] . ' ' . $grupo['PaternoProfesor'] . ' ' . $grupo['MaternoProfesor'];

                echo "<div class='grupo-card'>";
                echo "<div class='grupo-titulo'>📚 Grupo ID: " . htmlspecialchars($idGrupo) . "</div>";
                echo "<div class='grupo-profesor'>👨‍🏫 Profesor a cargo: " . htmlspecialchars($nombreProfesor) . "</div>";

                $queryAlumnos = "
                    SELECT u.Nombre, u.ap_Pat, u.ap_Mat
                    FROM alumno a
                    JOIN usuario u ON a.ID_Usuario = u.ID_Usuario
                    WHERE a.ID_Grupo = $idGrupo
                    ORDER BY u.Nombre ASC
                ";
                $resultAlumnos = $conn->query($queryAlumnos);

                if ($resultAlumnos && $resultAlumnos->num_rows > 0) {
                    echo "<ul class='alumnos-lista'>";
                    while ($alumno = $resultAlumnos->fetch_assoc()) {
                        $nombreCompleto = $alumno['Nombre'] . ' ' . $alumno['ap_Pat'] . ' ' . $alumno['ap_Mat'];
                        echo "<li>" . htmlspecialchars($nombreCompleto) . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p><em>❌ Este grupo aún no tiene alumnos registrados.</em></p>";
                }

                echo "</div>";
            }
        } else {
            echo "<p style='text-align:center;'>No hay grupos registrados.</p>";
        }

        $conn->close();
        ?>
    </div>

    <button class="btn-regresar" onclick="mostrarUsuarios()">← Regresar a Usuarios</button>
</div>


