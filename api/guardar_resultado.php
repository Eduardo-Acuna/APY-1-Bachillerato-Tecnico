<?php
/**
 * Recibe el resultado de un simulacro (JSON por POST) y lo agrega
 * al archivo storage/resultados.json. Actúa como una mini "base de datos"
 * en archivo plano para no requerir configuración adicional de MySQL.
 */
header('Content-Type: application/json; charset=utf-8');

$materiasValidas = ['matematica', 'lengua', 'guarani'];
$storageFile = __DIR__ . '/../storage/resultados.json';

$input = json_decode(file_get_contents('php://input'), true);

if (!is_array($input)
    || !isset($input['materia'], $input['puntaje'], $input['total'])
    || !in_array($input['materia'], $materiasValidas, true)
    || !is_numeric($input['puntaje'])
    || !is_numeric($input['total'])
) {
  http_response_code(400);
  echo json_encode(['ok' => false, 'error' => 'Datos inválidos.']);
  exit;
}

$registro = [
  'materia' => $input['materia'],
  'puntaje' => (int) $input['puntaje'],
  'total'   => (int) $input['total'],
  'fecha'   => date('d/m/Y H:i'),
];

$historial = [];
if (file_exists($storageFile)) {
  $decoded = json_decode(file_get_contents($storageFile), true);
  if (is_array($decoded)) { $historial = $decoded; }
}

$historial[] = $registro;

// conservamos como máximo los últimos 200 resultados
if (count($historial) > 200) {
  $historial = array_slice($historial, -200);
}

$ok = file_put_contents($storageFile, json_encode($historial, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

echo json_encode(['ok' => $ok !== false, 'registro' => $registro]);
