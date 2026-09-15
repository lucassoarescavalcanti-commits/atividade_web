<?php

    if(isset($_COOKIE['email'])){
        $email = $_COOKIE['email'];
    }
    else{
        $email = "email@email.com";
    }



?>



<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Área restrita</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label>Área Restrita</label>

        <input type="text" name="nome" placeholder="seu nome" required>

        <input type="email" name="email" placeholder="seu email" required>

        <input type="password" name="senha" placeholder="senha" minlength="6" maxlength= "8" required>

        <input type="file" name="foto" accept="image/*" required>
        <input type="submit" value="Cadastrar">

        <p>Já tem conta? <a href="login.php">Fazer login</a></p>
    </form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD']==="POST"){

        $nome= $_POST['nome'];
        $email=$_POST['email'];
        $password=$_POST['senha'];

        $foto = $_FILES['foto'];

        $pasta = "imagens/";

        $caminho = $pasta . basename($foto['name']);

        
        try{
        move_uploaded_file($foto['tmp_name'], $caminho);

        $usuario = [$nome, $email, $password, $caminho];

        $arquivo = fopen("usuarios.txt", "a");

        fwrite($arquivo, implode("|", $usuario) . "\n");
        fclose($arquivo);

        echo "<p class='msg'>Cadastro realizado com sucesso!</p>";

        }
        catch(Exception $e){
            echo "Erro ao criar o arquivo!" . $e;
        }
    }



?>