<?php

echo "=-=-=-=-=-=-=-=-=". PHP_EOL;
echo "Gerador de senha". PHP_EOL;
echo "=-=-=-=-=-=-=-=-=". PHP_EOL . PHP_EOL . PHP_EOL;

$ultimaSenha = readline("Digite o numero da ultima senha: ");

$senha = 1;

do{

    echo $senha . PHP_EOL;
    $senha++;

}

while($senha <= $ultimaSenha);