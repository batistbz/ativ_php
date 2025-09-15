<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('../config/database.php');
// Define o cabeçalho para JSON
header('Content-Type: application/json');
// Pega o ID da música da URL
$id = $_GET['id'] ?? null;
if (!$id) {
http_response_code(400); // Requisição inválida
echo json_encode(['mensagem' => 'ID da música não fornecido.']);
exit;
}
try {
// Comando SQL para selecionar uma música por ID
$sql = "SELECT id, titulo, artista, album, caminho_arquivo FROM songs WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$song = $stmt->fetch(); // Usa fetch() para pegar apenas uma linha
if ($song) {
echo json_encode(['status' => 'sucesso', 'data' => $song]);
} else {
http_response_code(404); // Não encontrado
echo json_encode(['mensagem' => 'Música não encontrada.']);
}
} catch (\PDOException $e) {
http_response_code(500);
echo json_encode(['mensagem' => 'Erro ao buscar a música: ' . $e->getMessage()]);
}
?>