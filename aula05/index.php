



<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação</title>
</head>
<body>
    <form action="quiz.php" method="post" enctype="multipart/form-data">
    <label>Nome:</label><br>
    <input type="text" name="nome" placeholder="seu nome" required><br>

    <label>Avatar:</label><br>
    <input type="file" name="foto" accept="image/*" required><br>

    <label>Tema:</label><br>
    <input type="radio" name="tema" value="claro">
    <label>Claro</label><br>
    <input type="radio" name="tema" value="escuro">
    <label>Escuro</label>
    <input type="submit" name="enviado" value="Começar quiz!">
</form>


</body>
</html>



<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $nome= $_POST['nome'];
        
        $foto = $_FILES['foto'];
        $pasta= "images/";
        
        $caminho = $pasta . basename($foto['name']);

        setcookie("tema", $_POST["tema"], time() + 1800*2);
        
        try{
            move_uploaded_file($foto['tmp_name'], $caminho);

            $usuario = [$nome, $caminho, $tema];
        }
        catch(Exception $e){
            echo "Erro" . $e;
        }
    }

$tema = $_COOKIE["tema"] ?? "escuro";
?>