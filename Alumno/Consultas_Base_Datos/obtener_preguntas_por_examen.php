<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../conexion.php'; 

header('Content-Type: application/json');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(["error" => "Parámetro 'id' inválido o no proporcionado."]);
    exit;
}

$id_examen = intval($_GET['id']);

$sql_examen = "SELECT * FROM examen WHERE id_examen = ?";
$stmt_examen = $conn->prepare($sql_examen);
$stmt_examen->bind_param("i", $id_examen);
$stmt_examen->execute();
$result_examen = $stmt_examen->get_result();

if ($result_examen->num_rows === 0) {
    echo json_encode(["error" => "Examen no encontrado."]);
    exit;
}

$examen = $result_examen->fetch_assoc();

$sql_preguntas = "SELECT * FROM pregunta WHERE id_examen = ?";
$stmt_preguntas = $conn->prepare($sql_preguntas);
$stmt_preguntas->bind_param("i", $id_examen);
$stmt_preguntas->execute();
$result_preguntas = $stmt_preguntas->get_result();

$preguntas = [];
while ($row = $result_preguntas->fetch_assoc()) {
    $preguntas[] = $row;
}

$response = [
    "examen" => $examen,
    "preguntas" => $preguntas,
    "cantidad_preguntas" => count($preguntas)
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>

