<?php
require_once "conexao.php";
$id = $_GET['id'];
$sql = "SELECT * FROM cursos WHERE id = :id";
$consulta = $conexao->prepare($sql);
$consulta->execute([':id' => $id]);
$curso = $consulta->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $sql = "UPDATE cursos SET nome = :nome, preco = :preco, vagas = :vagas WHERE id = :id";

    $consulta = $conexao->prepare($sql);
    $consulta->execute([':nome' => $_POST['nome'],
                        ':preco' => $_POST['preco'],
                        ':vagas' => $_POST['vagas'],
                        ':id' => $id]);

    header("Location: select.php");
    exit;
}
?>

<form method = "POST">
Nome: <input type ="text" name="nome" value="<?php echo $curso['nome']; ?>" required><br><br>

Preço: <input type = "number" step="0.01" name="preco" value="<?php echo $curso['preco']; ?>" required><br><br>

Vagas: <input type = "number" name="vagas" value="<?php echo $curso['vagas']; ?>" required><br><br>

<input type="submit" value="Salvar alterações">
</form>

<p><a href='select.php'>Voltar</a></p>