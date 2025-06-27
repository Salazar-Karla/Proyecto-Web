<?php
include("conexion.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$profesor = $_POST['Profesor'];
$bloque = $_POST['Bloques']; 

// Insertar en grupo
$insert_grupo = $conn->prepare("INSERT INTO grupo (id_profesor) VALUES (?)");
if (!$insert_grupo) {
    echo json_encode(['success' => false, 'message' => 'Error en prepare usuario: ' . $conn->error]);
    exit;
}

$insert_grupo->bind_param("s", $profesor);
if (!$insert_grupo->execute()) {
    echo json_encode(['success' => false, 'message' => 'Error al ejecutar usuario: ' . $insert_grupo->error]);
    exit;
}

$id_grupo = $conn->insert_id;

// Insertar en bloque_grupo
foreach ($bloque as $id_bloque) {
    $insert_bloque = $conn->prepare("INSERT INTO grupo_bloques (id_grupo, id_bloque) VALUES (?, ?)");
    if (!$insert_bloque) {
        echo json_encode(['success' => false, 'message' => 'Error en prepare alumno: ' . $conn->error]);
        exit;
    }

    $insert_bloque->bind_param("ii", $id_grupo, $id_bloque);
    if (!$insert_bloque->execute()) {
        echo json_encode(['success' => false, 'message' => 'Error al ejecutar bloque: ' . $insert_bloque->error]);
        exit;
    }        
}

echo json_encode(['success' => true]);
$conn->close();
?>
