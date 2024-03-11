<?php

//imprima os numeros de 0 a 10;

$contador = 0;

while($contador <= 10){
    echo $contador . PHP_EOL;
    $contador++;
};

echo "for: \n";

for($contador = 0; $contador <= 10; $contador++){
    echo $contador . PHP_EOL;
};