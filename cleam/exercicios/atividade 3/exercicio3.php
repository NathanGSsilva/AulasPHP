<?php

$tabuada = readline("Digite a tabuada: ");

for($i = 1, $tabuada1 = 1; $i <= $tabuada; ++$i, ++$tabuada1){

for($multiplicador = 0; $multiplicador <= 10; ++$multiplicador){
    echo "$tabuada1 x $multiplicador = " . $tabuada1*$multiplicador . PHP_EOL;
}
echo "--------------------------- \n";

};