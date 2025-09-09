    <?php
    require_once('../config/database.php'); // conecta ao banco de dados
    header('Content-Type: application/json'); // a respopsta será em JSON
    try {
    $sql = "SELECT id, titulo, artista, album, caminho_arquivo FROM songs ORDER BY data_adicao DESC";     // comando SQL para selecionar todas as músicas
    // executa a query e pega todos os resultados
    $stmt = $pdo->query($sql);
    $songs = $stmt->fetchAll();
    // retorna a lista de músicas em formato JSON
    echo json_encode(['status' => 'sucesso', 'data' => $songs]);
    } catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao listar as músicas: ' . $e->getMessage()]);
    }
    ?>