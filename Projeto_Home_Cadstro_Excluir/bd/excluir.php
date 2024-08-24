<?php
require_once 'conexao.php';

if($conexao->error){
    die("Erro de conexão: ".$conexao->error);

} 
    if(isset($_POST['id'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM table_bd_teste1 WHERE id = $id";

        if($conexao->query($sql) === TRUE){
            echo "Cadastro exluido com sucesso";
        } else {
            echo "Erro ao excluir cadastro". $conexao->error;
        }
    } else {
        echo "ID do caminhão não especificado.";
    }

    $conexao->close();
?>