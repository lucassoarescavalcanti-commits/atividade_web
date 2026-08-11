<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>
<body>
    <form action = "#" method = "POST">
        <fieldset>
            <legend>Boletim</legend>
            <input type="text" placeholder= "seu nome" name="nome" required><br>
            <input type="text" placeholder= "nota da prova" name="prova" required><br>
            <input type="text" placeholder= "nota do trabalho" name="trabalho" required><br>

            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            echo "<fieldset>";
            echo "<legend>Dados cadastrados</legend>";
            echo "Nome: " . $_POST['nome'] . "<br>";
            echo "Nota da Prova: " . $_POST['prova'] . "<br>";
            echo "Trabalho: " . $_POST['trabalho'] . "<br>";
            echo "</fieldset>";
        }
    
    ?>
</body>
</html>