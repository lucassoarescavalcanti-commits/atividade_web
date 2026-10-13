<?php
require_once "conexao.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $vagas = $_POST['vagas'];

    $sql = "INSERT INTO cursos (nome, preco, vagas)
    VALUES (:nome, :preco, :vagas)";

    $consulta = $conexao->prepare($sql);

    $consulta->execute([':nome' => $nome,
                        ':preco' => $preco,
                        ':vagas' => $vagas]);

    echo "<h1>Curso cadastrado com sucesso!</h1>";
}







?>
<form method = "POST">
Nome: <input type ="text" name="nome" required><br><br>

Preço: <input type = "number" step="0.01" name="preco" required><br><br>

Vagas: <input type = "number" name="vagas" required><br><br>

<input type="submit" value="Cadastrar curso">
</form>

<p><a href='select.php'>[Ver cursos]</a></p>