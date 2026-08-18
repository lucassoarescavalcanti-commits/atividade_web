<?php

//indexado
$cursos = ["ADS", "DSM", "GE", "PQ", "COMEX"];
for($i=0;$i<count($cursos);$i++){
    echo "<br>" . $cursos[$i];
}
//associativo
$aluno = [
    "matricula" => "202602",
    "nome" => "Fernando",
    "ciclo" => 2,
    "media" => 7.8,
    "aprovado" => true
];

foreach($aluno as $dado){
    echo "<br> ". $dado;
}


// echo "<br>" . $aluno["matricula"];
// echo "<br>" . $aluno["nome"];
// echo "<br>" . $aluno["ciclo"];
// echo "<br>" . $aluno["media"];
// echo "<br>" . $aluno["aprovado"];



?>