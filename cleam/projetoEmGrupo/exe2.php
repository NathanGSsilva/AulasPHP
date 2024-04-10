<?php

function soma($n1){
    $soma = 0;

    for($i= 0; $i <= $n1; $i++){
        $soma += $i;
};
return $soma;
};

$numero = readline("digite um numero: ");

echo soma($numero);