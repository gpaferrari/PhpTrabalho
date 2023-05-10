<?php
// Inclui o arquivo de configuração do banco de dados
require_once('conexaoBanco.php');

// verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coleta os dados do formulário
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // prepara a query SQL para inserir um novo registro na tabela "usuario"
    $sql = "INSERT INTO usuario (nome, usuario, email, senha) VALUES ('$nome', '$usuario', '$email', '$senha')";

    // executa a query SQL
    if (mysqli_query($conn, $sql)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

?>