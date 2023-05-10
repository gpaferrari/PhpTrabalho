<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('conexaoBanco.php');

// Define as configurações do servidor de e-mail
ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST["email"];

    // Verifica se o e-mail existe no banco de dados
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Se o e-mail existe, cria um token de recuperação de senha e insere no banco de dados
        $token = bin2hex(random_bytes(32)); // Gera um token aleatório
        $sql = "INSERT INTO tokens_recuperacao (email, token) VALUES ('$email', '$token')";
        mysqli_query($conn, $sql);

        // Envia um e-mail com as instruções de recuperação de senha para o usuário
        $assunto = "Recuperação de senha";
        $mensagem = "Olá, você solicitou a recuperação de senha para a sua conta. Para criar uma nova senha, clique no seguinte link:http://localhost/novaSenha.php?token=$token";
        // É importante lembrar de alterar "seudominio.com" para o seu próprio domínio
        mail($email, $assunto, $mensagem);

        // Informa o usuário que as instruções foram enviadas para o e-mail dele
        echo "As instruções para recuperação de senha foram enviadas para o seu e-mail.";
    } else {
        // Se o e-mail não existe no banco de dados, informa o usuário que não foi possível encontrar uma conta associada ao e-mail informado
        $erro = "Não foi possível encontrar uma conta associada ao e-mail informado.";
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

