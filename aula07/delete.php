<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM cursos WHERE id = :id";

$consulta = $conexao->prepare($sql);

$consulta->execute([':id' => $id]);

header("Location: select.php");
exit;



?>