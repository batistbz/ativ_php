<?php
    require_once('../config/database.php'); // inclui o arquivo de conexão com o banco de dados
    header('Content-Type: application/json'); // define o cabeçalho para indicar que a resposta será em JSON
    $data = json_decode(file_get_contents('php://input'), true); // pega os dados do corpo da requisição (JSON)

    // verifica se os campos obrigatórios foram enviados 
    
    if (!isset($data['titulo'], $data['artista'], $data['caminho_arquivo'])) {
    http_response_code(400); // Bad Request
    echo json_encode(['mensagem' => 'Dados incompletos.']);
        exit;
        }
        try {
        $sql = "INSERT INTO songs (titulo, artista, album, caminho_arquivo) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
        $data['titulo'],
        $data['artista'],
        $data['album'] ?? null, // O álbum pode ser nulo
        $data['caminho_arquivo']
        ]);
        // Retorna uma resposta de sucesso
        echo json_encode(['mensagem' => 'Música adicionada com sucesso!', 'id' => $pdo->lastInsertId()]);
        } catch (\PDOException $e) {
        http_response_code(500); // Internal Server Error
        echo json_encode(['mensagem' => 'Erro ao adicionar a música: ' . $e->getMessage()]);
        }
?>