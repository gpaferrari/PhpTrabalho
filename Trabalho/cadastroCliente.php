<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar o Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="POST" action="cadastro_cliente.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento"><br><br>

        <label for="cidade_nasc">Cidade</label>
        <input type="number" name="cidade_nasc" id="cidade_nasc" value="1"><br><br>

        <label for="ativo">Ativo:</label>
        <input type="number" name="ativo" id="ativo" value="1"><br><br>

        <input type="submit" value="Editar">
    </form>
</body>
</html>