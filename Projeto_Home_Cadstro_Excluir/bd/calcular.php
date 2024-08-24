<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto_id = $_POST["produto"];
    $quantidade = $_POST["quantidade"];

    // Consulta para obter o valor do produto selecionado
    $sql = "SELECT valor FROM produtos WHERE id = $produto_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $valor_produto = $row["valor"];

        // Calcula o total
        $total = $valor_produto * $quantidade;

        // Exibe o resultado
        echo "O total a ser pago pelo produto é: R$ " . number_format($total, 2);
    } else {
        echo "Produto não encontrado.";
    }
}
?>
