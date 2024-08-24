<?php
require_once 'conexao.php';
if($_POST){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sob_nome = $_POST['sob_nome'];
    $cep = $_POST['cep'];

    $sql = "INSERT INTO table_bd_teste1 (id, nome, sob_nome, cep) VALUES ('$id', '$nome', '$sob_nome', '$cep')";
    if($conexao ->query($sql)){
        echo "<p>Adicionado com sucesso.</p>";
    } else {
        echo "Erro" . $sql . '  ' . $conexao->connect_error;
    }
    $conexao->close();
}
?>
