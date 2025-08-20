    <?php
    // Verifica se o formulário de funcionário foi enviado
    if (isset($_POST['submit_funcionario'])) {
        $nome_func = $_POST['nome_func'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
        echo "<h3>Dados do Funcionário:</h3>";
        echo "Nome: $nome_func <br>";
        echo "Cargo: $cargo <br>";
        echo "Salário: R$ $salario <br><hr>";
    }

    // Verifica se o formulário de cliente foi enviado
    if (isset($_POST['submit_cliente'])) {
        $nome_cli = $_POST['nome_cli'];
        $email = $_POST['email_cli'];
        $telefone = $_POST['telefone_cli'];
        echo "<h3>Dados do Cliente:</h3>";
        echo "Nome: $nome_cli <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br><hr>";
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulários PHP</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            form {
                margin-bottom: 30px;
                padding: 20px;
                border: 1px solid #ccc;
                width: 300px;
            }
            label {
                display: block;
                margin-top: 10px;
            }
            input[type="text"], input[type="email"], input[type="number"] {
                width: 95%;
                padding: 5px;
            }
            input[type="submit"] {
                margin-top: 15px;
                padding: 7px 15px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>

    <h2>Formulário de Funcionário</h2>
    <form method="POST" action="">
        <label for="nome_func">Nome:</label>
        <input type="text" name="nome_func" required>

        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required>

        <label for="salario">Salário:</label>
        <input type="number" name="salario" step="0.01" required>

        <input type="submit" name="submit_funcionario" value="Enviar Funcionário">
    </form>

    <h2>Formulário de Cliente</h2>
    <form method="POST" action="">
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
