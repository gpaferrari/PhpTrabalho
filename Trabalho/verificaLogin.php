<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('conexaoBanco.php');

// Verifica se o formulário foi enviado
// verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // coleta os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // prepara a query SQL para selecionar o registro do usuário com as credenciais fornecidas
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

    // executa a query SQL
    $result = mysqli_query($conn, $sql);

    // verifica se há um registro correspondente no banco de dados
    if (mysqli_num_rows($result) == 1) {
        // o usuário existe no banco de dados, inicia a sessão do usuário e redireciona para a página inicial
        session_start();
        $_SESSION["email"] = $email;
        echo("Login Feito!");
        exit();
    } else {
        // o usuário não existe no banco de dados ou as credenciais estão incorretas
        $erro = "Credenciais de login incorretas. Tente novamente.";
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>