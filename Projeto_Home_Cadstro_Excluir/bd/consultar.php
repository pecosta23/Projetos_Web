<?php
// Dados de conexão ao banco de dados
$localhost = "localhost";
$usuario = "root";
$senha = "";
$bd = "teste1";

// Conectando ao banco de dados
$conexao = new mysqli($localhost, $usuario, $senha, $bd);

// Verificando a conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Consulta para selecionar informações da tabela
$sql = "SELECT id, nome, sob_nome, cep FROM table_bd_teste1";
$resultado = $conexao->query($sql);

// Verificando se a consulta retornou resultados
if ($resultado->num_rows > 0) {
    // Exibindo os dados em uma tabela HTML
    echo "<table border='2'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CEP</th>
            </tr>";

    // Loop através dos resultados e exibição na tabela
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["sob_nome"] . "</td>
                <td>" . $row["cep"] ."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum resultado encontrado";
}
// Fechando a conexão com o banco de dados
$conexao->close();
?>
