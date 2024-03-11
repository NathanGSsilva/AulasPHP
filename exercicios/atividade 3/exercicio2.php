<?php

$tabuada = readline("Digite a tabuada: ");

$multiplicador = 0;

do{

    echo "$tabuada x $multiplicador = " . $tabuada*$multiplicador . PHP_EOL;

}

while(++$multiplicador <= 10);