<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('conexaoBanco.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade_nasc = $_POST["cidade_nasc"];
    $ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : 0;

    // Prepara a instrução SQL para inserir os dados na tabela cliente
    $sql = "INSERT INTO cliente (nome, data_nascimento, cidade_nasc, ativo) VALUES ('$nome', '$data_nascimento', '$cidade_nasc', '$ativo')";

    // Executa a instrução SQL
    if (mysqli_query($conn, $sql)) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente: " . mysqli_error($conn);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

