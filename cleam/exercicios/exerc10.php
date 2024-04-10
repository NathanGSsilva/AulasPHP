<?php

$nota1 = 9;
$nota2 = 9;

if($nota1 >= 0 && $nota1 <= 10){
    if($nota2 >= 0 && $nota2 <= 10){
        
        $notafinal = ($nota1 + $nota2) / 2;

        if($notafinal == 10){
            echo "Aprovado com Distinção!!";
            
        }
        elseif($notafinal >= 7){
            echo "aprovado!";
        }
        else{
            echo "reprovado!";
        }
    }
    else{
        echo "Nota 2 invalida!";
    }
}
else{
    echo "Nota 1 invalida!";
}