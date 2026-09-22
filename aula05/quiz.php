<?php
session_start();

$file = file_get_contents('perguntas.json');
$perguntas = json_decode($file, true);



        $nome= $_POST['nome'];
       $tema = $_COOKIE["tema"] ?? "escuro";
        $foto = $_FILES['foto'];
        $pasta= "images/";
        
        $caminho = $pasta . basename($foto['name']);


    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body class=<?php echo $tema;?>>
    <form action="resultado.php" method="post" enctype="multipart/form-data">
    <?php
    echo "<h2>$nome</h2>";
    echo "<img src='$caminho'>";
    foreach($perguntas as $p){

        ?>
        <section>
            <h2><?php echo $p['numero'];?></h2>
            <h2><?php echo $p['pergunta'];?></h2>
            
            <h2><?php  foreach($p['opcoes'] as $ops){
                echo "<input type='radio' name=" . $p['numero'] . " value=$ops<br>";
                echo "<label>$ops</label> <br>";
            } ;?></h2>
        </section>
    <?php
    
        }
    ?>
    <button type="submit">Enviar!</button>
    </form>
</body>
</html>