<?php

  include './../conexion.php';

  $query = "SELECT * FROM ".$_COOKIE['tipo']." WHERE boleta = ".$_COOKIE['boleta'];
  $result = $conexion->query($query);
  $row = $result->fetch_assoc();

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
    --color-secundario: #3f37c9;
    --color-fondo: #f8f9fa;
    --color-texto: #2b2d42;
    --color-borde: #dee2e6;
}

.contenedor-perfil {
    max-width: 100%;
    background: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.encabezado-perfil {
    background: linear-gradient(135deg, var(--color-primario), var(--color-secundario));
    padding-top: 20px;
    padding-bottom: 20px;
    color: white;
    text-align: center;
    position: relative;
}

.avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 4px solid white;
    object-fit: cover;
    margin-bottom: 15px;
    background-color: #e2e2e2;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 40px;
    color: var(--color-primario);
}

.nombre-usuario {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 5px;
}

.tipo-usuario {
    display: inline-block;
    background-color: rgba(255, 255, 255, 0.2);
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 14px;
    margin-top: 5px;
}

.cuerpo-perfil {
    padding: 30px;
}

.seccion-info {
    margin-bottom: 25px;
}

.seccion-titulo {
    font-size: 18px;
    color: var(--color-primario);
    margin-bottom: 15px;
    padding-bottom: 8px;
    border-bottom: 2px solid var(--color-borde);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.grupo-datos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.dato {
    margin-bottom: 15px;
}

.etiqueta {
    font-size: 14px;
    color: #6c757d;
    display: block;
    margin-bottom: 5px;
}

.valor {
    font-size: 16px;
    font-weight: 500;
    padding: 8px 12px;
    background-color: var(--color-fondo);
    border-radius: 5px;
    border-left: 4px solid var(--color-primario);
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-editar {
    background-color: var(--color-primario);
    color: white;
}

.btn-editar:hover {
    background-color: var(--color-secundario);
}

.btn-cerrar {
    background-color: white;
    color: var(--color-primario);
    border: 1px solid var(--color-primario);
}

.btn-cerrar:hover {
    background-color: var(--color-fondo);
}

@media (max-width: 600px) {
    .grupo-datos {
        grid-template-columns: 1fr;
    }
    
    .encabezado-perfil {
        padding: 20px 15px;
    }
    
    .cuerpo-perfil {
        padding: 20px;
    }
}

  </style>

</head>
<body>
  
    <div class="contenedor-perfil">

        <div class="encabezado-perfil">
            <div class="avatar">P</div>
            <h1 class="nombre-usuario">
              <?php
                echo $row['nombre'];
              ?>
            </h1>
            <div class="tipo-usuario">
              <?php
                echo $_COOKIE['tipo'];
              ?>
            </div>
        </div>
        
        <div class="cuerpo-perfil">
            <div class="seccion-info">
                <h2 class="seccion-titulo">Información Personal</h2>
                <div class="grupo-datos">
                    <div class="dato">
                        <span class="etiqueta">Nombre(s)</span>
                        <div class="valor">
                          <?php
                            echo $row['nombre'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Apellido Paterno</span>
                        <div class="valor">
                          <?php
                            echo $row['ap_Pat'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Apellido Materno</span>
                        <div class="valor">
                          <?php
                            echo $row['ap_Mat'];
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="seccion-info">
                <h2 class="seccion-titulo">Datos Académicos</h2>
                <div class="grupo-datos">
                    <div class="dato">
                        <span class="etiqueta">Boleta/Número de Control</span>
                        <div class="valor">
                          <?php
                            echo $row['boleta'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Grupo</span>
                        <div class="valor">
                          <?php
                            echo $row['grupo'];
                          ?>
                        </div>
                    </div>
                    <div class="dato">
                        <span class="etiqueta">Tipo de Usuario</span>
                        <div class="valor">
                          <?php
                            echo $_COOKIE['tipo'];
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="seccion-info">
                <h2 class="seccion-titulo">Información de Contacto</h2>
                <div class="grupo-datos">
                    <div class="dato">
                        <span class="etiqueta">Correo Electrónico</span>
                        <div class="valor">
                          <?php
                            echo $row['correo'];
                          ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>