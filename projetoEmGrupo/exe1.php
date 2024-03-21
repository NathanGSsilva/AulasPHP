<?php

$nota1 = readline("digite a primeira nota: ");

if($nota1 >= 0 & $nota1 <= 10){
    $nota2 = readline("digite a segunda nota: ");
    if($nota2 >= 0 & $nota2 <= 10){
        echo "a media". ($nota1 + $nota2 ) / 2;
    }else{
        echo "valor digitado incorreto";
        }   
}else{
echo "valor digitado incorreto";
};