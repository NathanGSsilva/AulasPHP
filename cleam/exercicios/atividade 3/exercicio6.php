<?php

$limite = readline("digite o limite: ");
$num1 = 1;
$num2 = 0;
$numeroNovo = 1;

for ($i = 1; $i <= $limite; $i++) {

    if ($i == 1){
        echo "";
    }
    $num1 = $num2;
    $num2 = $numeroNovo;
    $numeroNovo = $num1 + $num2;
    echo $numeroNovo . "\n";

};