<?php
// configurações do banco de dados
$host = 'localhost';
$db = 'music_player';
$user = 'root'; // 0 usuário do seu banco de dados (geralmente 'root')
$pass = ''; // a senha do seu banco de dados (geralmente vazio)
$charset = 'utf8mb4';
// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];
try {
// cria uma nova instância do PDO para a conexão
$pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
// se a conexão falhar, exibe uma mensagem de erro
throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>