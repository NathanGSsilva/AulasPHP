<?php

echo "<h1>Estrutura condicional!</h1>";

$nome = "Nathan Gabriel";
$idade = 18;
$email = "nathan@teste.com";
$senha = "321654";
$perfil = "Engenheiro";
$permissao = true;

//---------------------//------------------------//--//---------------------//------------------------//

echo "<h2>Exemplo de IF (se...) </h2>";

if($idade >= 18){
    echo "O usuario $nome é maior de idade!";
}

echo "<hr>";

echo "<h2>Exemplo de if e else(se...então...senão...) </h2>";

if($email == "nathan@teste.com" && $senha == "321654" ){
    echo "Usuario logado!!";
}
else{
    echo "Usuario ou senha inválidos!";
}


echo "<hr>";

if($perfil == "estudante" || $perfil == "Engenheiro"){
    echo "Paga meia entrada";}
    else{ echo "Paga o valor total";}

echo "<hr>";

$nota1 = 10;
$nota2 = -10;

if($nota1 >= 0 && $nota1 <= 10){
    if($nota2 >= 0 && $nota2 <= 10){
        
        $notafinal = ($nota1 + $nota2) / 2;

        if($notafinal >= 7){
            echo "aprovado!";
        }
        else{
            echo "reporvado!";
        }
    }
    else{
        echo "Nota 2 invalida!";
    }
}
else{
    echo "Nota 1 invalida!";
}

