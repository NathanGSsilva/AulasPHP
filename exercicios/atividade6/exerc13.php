<?php

echo "------------------------";
echo "CALCULAR NUMEROS PRIMOS";
echo "------------------------" . PHP_EOL;

$n1 = readline("Digite o primeiro numero: ");
$n2 = readline("Digite o segundo numero: ");

do{
    if($n1 % $n1 == 0 && $n1 % 1 == 0){
        echo $n1 . PHP_EOL;
    }
}

while(++$n1 < $n2);