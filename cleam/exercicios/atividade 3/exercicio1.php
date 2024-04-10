<?php

$codigo = 103;
$quantidade = 5;

switch($codigo){
    case 100: 
        echo "Produto: Cachorro Quente ". "<br>". "Codigo: $codigo"."<br>". "Valor da compra: ". $quantidade * 1.70;
    break;
    case 101:
        echo "Produto: Bauru Simples"."<br>"."Codigo: $codigo"."<br>". "Valor da compra: ". $quantidade * 2.30;
    break;
    case 102:
        echo "Produto: Bauru com ovo"."<br>". "Codigo: $codigo"."<br>". "Valor da compra: ". $quantidade * 2.60;
    break;
    case 103:
        echo "Produto: Hamburguer"."<br>". "Codigo: $codigo"."<br>". "Valor da compra: ". $quantidade * 2.40;
    break;
    case 104:
        echo "Produto: Cheeseburger"."<br>". "Codigo: $codigo"."<br>". "Valor da compra: ". $quantidade * 2.50;
    break;
    case 105:
        echo "Produto: Refrigerante"."<br>". "Codigo: $codigo"."<br>". "Valor da compra: ". $quantidade * 1.00;
    break;
}