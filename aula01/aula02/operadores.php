<?php
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];

$adicao = $n1+$n2;

echo "Soma: " . $adicao;
echo "<br>Subtração: " . $n1-$n2;
echo "<br>Divisão: " . $n1/$n2;
echo "<br>Multiplacação: " . $n1*$n2;
echo "<br>Módulo: " . $n1%$n2;
echo "<br>Exponenciação: " . $n1**$n2;

?>