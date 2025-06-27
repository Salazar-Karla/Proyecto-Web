<style>
    .contenedor-usuarios {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        padding: 30px 50px;
    }

    .usuario-card {
        background-color: #fff3e0;
        border: 2px solid #ff7043;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        flex: 1;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .usuario-card h3 {
        color: #d84315;
        margin-bottom: 15px;
    }

    .usuario-card img {
        width: 120px;
        height: auto;
        margin-bottom: 20px;
    }

    .usuario-card button {
        padding: 10px 15px;
        background-color: #ff7043;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .usuario-card button:hover {
        background-color: #e64a19;
    }

    .titulo-seccion {
        text-align: center;
        color: #ff6f00;
        margin-top: 25px;
        font-size: 1.8em;
    }
</style>

<h2 class="titulo-seccion">➕ Selecciona el tipo de usuario o grupo que deseas agregar ➕</h2>

<div class="contenedor-usuarios">
    <div class="usuario-card">
        <h3>Agregar Alumno</h3>
        <img src="../Imagenes/alumno.png" alt="Alumno">
        <button onclick="mostrarAgregarAlumno()">Agregar Alumno</button>
    </div>
    <div class="usuario-card">
        <h3>Agregar Profesor</h3>
        <img src="../Imagenes/profe.png" alt="Profesor">
        <button onclick="mostrarAgregarProfesor()">Agregar Profesor</button>
    </div>
    <div class="usuario-card">
        <h3>Agregar Administrador</h3>
        <img src="../Imagenes/aadmin.png" alt="Administrador">
        <button onclick="mostrarAgregarAdministrador()">Agregar Administrador</button>
    </div>

    <div class="usuario-card">
        <h3>Agregar Grupo</h3>
        <img src="../Imagenes/grupo.png" alt="Grupo">
        <button onclick="mostrarAgregarGrupo()">Agregar Grupo</button>
    </div>
</div>
