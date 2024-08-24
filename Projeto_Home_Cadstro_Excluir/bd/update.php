<?php
    require_once 'conexao.php';

    if($_POST){
        $nome = $_POST['nome'];
        $sob_nome = $_POST['sob_nome'];
        $cep = $_POST['cep'];
        $id = $_POST['id'];

        $sql = "UPDATE table_bd_teste1 SET nome = '$nome', sob_nome = '$sob_nome', cep = '$cep' WHERE id = {$id}";
        if($conexao->query($sql)){
            echo "<p>Atualizado com sucesso</p>";
            echo "<a href='http://localhost/EXE/home.html'><button type = 'button' class = 'btn btn-sucess'>Página Inicial</buton></a>";

        } else {
            echo "Erro: ". $conexao->error;

        }
        $conexao->close();
    }
?>