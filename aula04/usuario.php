<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contatos</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
            display: flex;
            justify-content: space-between;
            align-items:center;
            background-color: brown;
            padding:30px;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 20px;
        }

        body{
            width: 100%;
        }

        body div{
            width: 30%;
            padding-left: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
        }

        .card{
            margin: 5px; 
            padding: 10px;
            width: 400px;
            box-shadow: 2px 2px 5px black;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 15px;
        } 

        .card img {
            width: 150px;
        }
    </style>
</head>
<body>
    <header>Lista de contatos</header>
    <div>
    <?php
try{
    $arquivo = fopen("usuarios.txt", "r");
    $conteudo = fread($arquivo, filesize("usuarios.txt"));
    // echo nl2br($conteudo);
    fclose($arquivo);

    $usuarios = explode("\n", $conteudo);
    array_pop($usuarios); //remobe o ultimo elemento do array

    foreach($usuarios as $user){
        $u = explode("|", $user);
        echo "<div class='card'>";
        echo "<div>";
        echo "<img src='" .$u[3] . "'>";
        echo "</div>";
        echo "<br>Nome: " . $u[0];
        echo "<br>E-mail: " . $u[1];
        echo "<br>Senha: " . $u[2];
        echo "<br>URL: " . $u[3];
        echo "</div>";
    }

    // var_dump($usuarios);
}
catch(Exception $e){
    echo "Erro ao abir o arquivo!" . $e;
}


?>
</div>
</body>
</html>
