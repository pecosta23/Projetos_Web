<?php
$localhost = "localhost";
$usuario = "root";
$senha = "";
$db = "teste1";
$conexao= new mysqli($localhost, $usuario, $senha, $db);
if($conexao->connect_error) {
die("Erro de Conexao : " . $conexao->connect_error);
} else {
// echo "Conectado com sucesso";
}
?>