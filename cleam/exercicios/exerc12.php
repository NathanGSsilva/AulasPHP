<?php

echo PHP_EOL . "=-=-=-=-=-=-=-=-=". PHP_EOL;
echo "Gerador de tabuada". PHP_EOL;
echo "=-=-=-=-=-=-=-=-=". PHP_EOL . PHP_EOL;

$numeroTabuada = readline("Digite o numero a ser multiplicado na tabuada: ");
$i = 0;

do{
    echo $numeroTabuada . " x " . $i . " = " . $numeroTabuada * $i . PHP_EOL;
}

while(++$i < 11);