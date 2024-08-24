<?php
require_once 'conexao.php';
if($_POST){
    $nome_index_log = $_POST['nome_index_log'];
    $senha_index_log = $_POST['senha_index_log'];

    $sql = "INSERT INTO table_login (nome, senha) VALUES ('$nome_index_log', '$senha_index_log')";
    if($conexao ->query($sql)){
        echo "<p>Usuário cadastrado com sucesso.</p>
              <p>Acesso de edição concedido.</p>";
        echo "<a href='http://localhost/EXE/login.html'><button type = 'button' class = 'btn btn-sucess'>Página Inicial</buton></a>";
    } else {
        echo "Erro" . $sql . '  ' . $conexao->connect_error;
    }
    $conexao->close();
}
?>