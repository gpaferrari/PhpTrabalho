<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('conexaoBanco.php');

// Coleta o token da URL
$token = $_GET["token"];

// Verifica se o token existe no banco de dados
$sql = "SELECT * FROM tokens_recuperacao WHERE token = '$token'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Se o token existe, exibe o formulário para o usuário criar uma nova senha
    echo '
        <form method="post" action="atualizarSenha.php">
            <label for="senha">Nova senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="hidden" name="token" value="' . $token . '">
            <input type="submit" value="Atualizar senha">
        </form>
    ';
} else {
    // Se o token não existe no banco de dados, informa o usuário que o link é inválido ou expirou
    echo "O link de recuperação de senha é inválido ou expirou.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
