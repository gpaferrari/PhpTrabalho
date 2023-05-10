<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alteração de Cliente</title>
</head>
<body>
    <h1>Alteração de Cliente</h1>

    <?php
// Verifica se o ID do cliente foi passado pela URL
if (isset($_GET['id'])) {
    // Conecta ao banco de dados
    $conexao = mysqli_connect("localhost", "usuario", "senha", "loja");

    // Verifica se a conexão foi estabelecida com sucesso
    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Escapa o valor do ID para evitar injeção de SQL
    $id = mysqli_real_escape_string($conexao, $_GET['id']);

    // Consulta o cliente com o ID informado
    $query = "SELECT * FROM cliente WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $query);

    // Verifica se a consulta foi realizada com sucesso
    if ($resultado) {
        // Obtém os dados do cliente a ser alterado
        $cliente = mysqli_fetch_assoc($resultado);
    } else {
        die("Erro ao consultar o cliente: " . mysqli_error($conexao));
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
} else {
    die("ID do cliente não informado.");
}
?>

<form method="POST" action="alterar_cliente.php">
    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome']; ?>" required><br><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $cliente['data_nascimento']; ?>"><br><br>

    <label for="cidade_nasc">Cidade:</label>
    <input type="number" name="cidade_nasc" id="cidade_nasc" value="<?php echo $cliente['cidade_nasc']; ?>"><br><br>

    <label for="ativo">Ativo:</label>
    <input type="number" name="ativo" id="ativo" value="<?php echo $cliente['ativo']; ?>"><br><br>

    <input type="submit" value="Alterar">
</form>
</body>
</html> 