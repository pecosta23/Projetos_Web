<?php
require_once 'conexao.php';
if ($_POST) {
    $id = $_POST["id"];
    $placa = $_POST["placa"];
    $modelo = $_POST["modelo"];
    $nome_mot = $_POST["nome_mot"];
    $ano_fabri = $_POST["ano_fabri"];
    $val_di = $_POST["val_di"];


    $sql = "INSERT INTO caminhao (id, placa, modelo, nome_mot, ano_fabri, val_di ) VALUES ('$id', '$placa', '$nome_mot', '$ano_fabri', '$val_di')";
    if($conexao ->query($sql)){
        echo "<p>Adicionado com sucesso.</p>";
    } else {
        echo "Erro" . $sql . '  ' . $conexao->connect_error;
    }
    $conexao->close();

}
?>
