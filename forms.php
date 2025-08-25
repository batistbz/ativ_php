<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulários PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Formulário de Funcionário</h2>
<form method="POST" action="processa_funcionario.php">
    <label for="nome_func">Nome:</label>
    <input type="text" name="nome_func" required>

    <label for="cargo">Cargo:</label>
    <input type="text" name="cargo" required>

    <label for="salario">Salário:</label>
    <input type="number" name="salario" step="0.01" required>

    <input type="submit" name="submit_funcionario" value="Enviar Funcionário">
</form>

<h2>Formulário de Cliente</h2>
<form method="POST" action="processa_cliente.php">
    <label for="nome_cli">Nome:</label>
    <input type="text" name="nome_cli" required>

    <label for="email_cli">Email:</label>
    <input type="email" name="email_cli" required>

    <label for="telefone_cli">Telefone:</label>
    <input type="text" name="telefone_cli" required>

    <input type="submit" name="submit_cliente" value="Enviar Cliente">
</form>

</body>
</html>
