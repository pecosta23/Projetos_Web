<?php
    require_once 'conexao.php';
    session_start();
    $_SESSION['nome']=$_POST['nome'];
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];

    $sql = mysqli_query($conexao, "SELECT * FROM table_login where nome='$nome' AND senha='$senha' ") or die ("Erro de conexão: " . $conexao->connect_error);
    $resultado = mysqli_fetch_assoc($sql);

    if (isset($resultado)) {
        header("Location: http://localhost/EXE/");

    } else {
        echo "Nome de usuário ou senha incorretos.<br>";
        echo "Não possui cadastro? Cadatra-se já!";
    }

        $conexao->close();

?>
<br><br>
<a href="http://localhost/EXE/login.html"><button type="submit">Voltar</a></button>
<a href="http://localhost/EXE/login_index.html"><button type="submit">Cadastrar</a></button>