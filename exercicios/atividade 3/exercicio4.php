<?php

$limite = readline("Digite o primeiro numero: ");
$num2 = readline("Digite o intervalo: ");

for (; $limite < $num2; $limite++){
    if($limite % 2 != 0){
        echo "Impar: $limite \n";
    }
};
