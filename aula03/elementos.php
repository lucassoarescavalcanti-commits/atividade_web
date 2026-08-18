<?php
$unidades = [
    "Fatec Praia Grande",
    "Fatec Santos",
    "Fatec São Bernardo",
    "Fatec São Paulo",
];

$cursos = [
    "Análise e Desenvolvimento de Sistemas",
    "Comércio Exterior",
    "Desenvolvimento de Software Multiplataforma",
    "Gestão Empresarial",
];


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos</title>
</head>
<body>
    <h1>Novo Aluno</h1>
    <form action="#" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Unidade:</label><br>
        <select name="unidade">
            <?php
                foreach($unidades as $uni){
                    echo "<option>$uni</option>";
                }
            
            ?>
            
        </select><br><br>

        <fieldset>
            <legend>Curso</legend>
            <?php
                foreach($cursos as $c){
                    echo "<input type='radio' value=$c name='curso'>$c<br>";
                }
            ?>
        </fieldset><br>

        <fieldset>
            <legend>Período</legend>
            <input type="checkbox" value="Matutino" name="periodo[]">Matutino<br>
            <input type="checkbox" value="Vespertino" name="periodo[]">Vespertino<br>
            <input type="checkbox" value="Noturno" name = "periodo[]">Noturno<br>
        </fieldset><br>
        <input type="submit" value="Cadastrar"><br><br>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nome = $_POST['nome'];
    $unidade = $_POST['unidade'];
    $curso = $_POST['curso'];
    $periodos = $_POST['periodo'];
    echo "<h1>Dados Cadastrados</h1>";
    echo "<b>Aluno:</b> $nome";
    echo "<br><b>Unidade:</b> $unidade";
    echo "<br><b>Curso:</b> $curso";
    echo "<br><b>Períodos:</b>"; 

    foreach($periodos as $p){
        echo " $p, ";
    }
}


?>