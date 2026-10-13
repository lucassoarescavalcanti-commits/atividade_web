<?php
require_once "conexao.php";

$sql = "SELECT id, nome, preco, vagas FROM cursos";

$resultado = $conexao->query($sql);

echo "<h1>Cursos <a href = 'insert.php'>[Novo]</a></h1>";

while($curso = $resultado->fetch(PDO::FETCH_ASSOC)){
    echo $curso['id'] . " - ";
    echo $curso['nome'] . " - ";
    echo "R$ " . $curso['preco'] . " - ";
    echo $curso['vagas'] . " vagas";

    echo "| <a href='update.php?id=" . $curso['id'] . "'>Editar</a>";

    echo "| <a href='delete.php?id=" . $curso['id'] . "'>Excluir</a>";



    echo "<br>";
}
$conexao = null;

?>