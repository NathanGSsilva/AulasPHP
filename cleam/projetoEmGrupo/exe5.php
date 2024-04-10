<?php

function celc($num){
    $faren = $num * (9/5) + 32;
    echo "F ". $faren;
}

$teste = readline("digite a temperatura: ");

echo celc($teste);