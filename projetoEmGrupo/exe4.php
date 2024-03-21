<?php

function num($num){
   sort($num);
    foreach ($num as $val) {
        echo $val . "\n";
    }
}

$numeros = [8,6,10,5];

echo num($numeros);