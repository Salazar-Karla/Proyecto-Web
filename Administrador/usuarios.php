<?php
include("conexion.php");

// Obtener administradores y profesores
$query = "
    SELECT u.id_usuario, u.nombre, u.ap_Pat, u.ap_Mat, u.correo, u.numero, 'Administrador' AS tipo
    FROM usuario u
    JOIN administrador a ON u.id_usuario = a.id_usuario
    UNION
    SELECT u.id_usuario, u.nombre, u.ap_Pat, u.ap_Mat, u.correo, u.numero, 'Profesor' AS tipo
    FROM usuario u
    JOIN profesor p ON u.id_usuario = p.id_usuario
";
$resultado = $conn->query($query);
?>

<div class="container-panel">
    <h2 class="titulo-panel">👥 Administrar Usuarios 👥</h2>

    <div class="botones-panel">
        <button onclick="mostrarAgregarUsuario()" class="btn-agregar">➕ Agregar Usuario</button>
        <button onclick="mostrarVerAlumnos()" class="btn-ver">👦 Ver Alumnos</button>
        
    </div>

    <div class="tabla-contenedor">
        <table class="tabla-usuarios">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Tipo De Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><strong><?= htmlspecialchars($row['id_usuario']) ?></strong></td>
                    <td><strong><?= !empty($row['nombre']) ? htmlspecialchars($row['nombre']) : 'Sin dato' ?></strong></td>
                    <td><strong><?= !empty($row['ap_Pat']) ? htmlspecialchars($row['ap_Pat']) : 'Sin dato' ?></strong></td>
                    <td><strong><?= !empty($row['ap_Mat']) ? htmlspecialchars($row['ap_Mat']) : 'Sin dato' ?></strong></td>
                    <td><strong><?= !empty($row['correo']) ? htmlspecialchars($row['correo']) : 'Sin dato' ?></strong></td>
                    <td><strong><?= !empty($row['numero']) ? htmlspecialchars($row['numero']) : 'Sin dato' ?></strong></td>
                    <td><strong><?= htmlspecialchars($row['tipo']) ?></strong></td>
                    <td style="display:flex;gap:8px;justify-content:center;">
                        <a href="editar_usuario.php?id=<?= $row['id_usuario'] ?>" class="btn-editar">✏️ Editar</a>
                        <a href="eliminar_usuario.php?id=<?= $row['id_usuario'] ?>" onclick="return confirm('¿Eliminar este usuario?')" class="btn-eliminar">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function mostrarVerAlumnos() {
    fetch('ver_alumnos.php')
        .then(res => res.text())
        .then(html => {
            document.getElementById('contenido-dinamico').innerHTML = html;
        })
        .catch(err => {
            document.getElementById('contenido-dinamico').innerHTML = "<p>Error al cargar los grupos y alumnos.</p>";
        });
}

function mostrarAgregarUsuario() {
    fetch('agregar_usuario.php')
        .then(res => res.text())
        .then(html => {
            document.getElementById('contenido-dinamico').innerHTML = html;
        });
}
</script>

<style>
.container-panel {
    padding: 30px;
    text-align: center;
    color: black;
}
.titulo-panel {
    color: #ff6f00;
    font-size: 2rem;
    margin-bottom: 20px;
    font-weight: bold;
}
.botones-panel {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}
.btn-agregar, .btn-ver {
    background-color: #ff6f00;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    font-weight: bold;
    border: none;
    cursor: pointer;
}
.tabla-contenedor {
    margin-top: 30px;
    overflow-x: auto;
    display: flex;
    justify-content: center;
}
.tabla-usuarios {
    width: 95%;
    border-collapse: collapse;
    background-color: white;
    color: black;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    font-weight: bold;
}
.tabla-usuarios th, .tabla-usuarios td {
    padding: 12px;
    text-align: center;
}
.tabla-usuarios thead {
    background-color: #ff6f00;
    color: white;
}
.btn-editar {
    background-color: #ffb300;
    padding: 6px 12px;
    color: black;
    font-weight: bold;
    border-radius: 6px;
    text-decoration: none;
}
.btn-eliminar {
    background-color: #e53935;
    padding: 6px 12px;
    color: white;
    font-weight: bold;
    border-radius: 6px;
    text-decoration: none;
}
</style>
