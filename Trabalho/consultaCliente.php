<?php
// Inclui o arquivo de conexão com o banco de dados
require_once('conexaoBanco.php');

// Consulta os clientes cadastrados no banco de dados
$sql = "SELECT * FROM cliente";
$resultado = mysqli_query($conn, $sql);

// Verifica se há resultados na consulta
if (mysqli_num_rows($resultado) > 0) {
    // Exibe os resultados em uma tabela com estilos do Bootstrap
    echo "<table class='table'>";
    echo "<thead class='thead-dark'><tr><th>ID</th><th>Nome</th><th>Data de Nascimento</th><th>Cidade de Nascimento</th><th>Ativo</th></tr></thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["data_nascimento"] . "</td><td>" . $row["cidade_nasc"] . "</td><td>" . $row["ativo"] . "</td></tr>";
        
    }

    echo "</tbody></table>";
} else {
    // Exibe mensagem de erro caso não haja resultados
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
