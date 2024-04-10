<?php
function reverse($nome){
    $verificar = strrev($nome);
    if($verificar == $nome){
        echo "é palindromo";
    }else{
        echo "nao é palindromo";
    };
}

$teste = readline("digite uma plavra: ");

echo reverse($teste);
