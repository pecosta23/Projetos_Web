<?php
require_once 'conexao.php';
$nome = $_POST['nome'];

$sql = ("SELECT * FROM table_bd_teste1 WHERE nome = '$nome'") or die 
        (mysqli_error($conexao));

    $resultado = $conexao -> query($sql);

    if($resultado->num_rows>0){
        
        $nome = $_POST['nome'];
        
            echo "<table border='2'>
                    <tr>
                        <th>Nome</th>
                    </tr>";
        
            // Loop através dos resultados e exibição na tabela
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nome"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Nenhum resultado encontrado";
        }
?>