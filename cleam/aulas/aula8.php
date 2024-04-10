<?php 

echo "<h1>Trabalhando com Funções</h1>";

// usar kermalcase quando usar orientação objeto e usar "_" no normal. 
function somar($num1, $num2){
    
    return $num1 + $num2;

};

echo somar(100,15);
echo "<br>";
echo somar(29,10);

echo "<hr>";

//--------------------------------------------------------------------------------------------------------------

echo "<h2>Verificação de par ou impar</h2>";

function is_par($num){
    return $num % 2 == 0;
};

if(is_par(1)){
echo "é par";
}else{
    echo "é impar";
};

//--------------------------------------------------------------------------------------------------------------

echo "<hr>";
echo "<h2>Verificador de maior de idade</h2>";
echo "<br>";

function maior_idade($num){
    if($num >= 18){
        return "Maior de idade";
    }
    return  "Menor de idade";
};

echo maior_idade(18);

//--------------------------------------------------------------------------------------------------------------

echo "<hr>";
echo "<h2>Atividade:</h2>". "Construa uma função, chamada soma_tres(), que retorne a soma de três números";
echo "<br>";

function soma_tres($num1, $num2, $num3){
    return $num1 + $num2 + $num3;
};

echo "<br>". soma_tres(10,5,5);

//--------------------------------------------------------------------------------------------------------------

echo "<hr>";
echo "<h2>Atividade 2:</h2>". "Construa uma função, chamada media(), que retorne a média de 4 notas";
echo "<br>";

function media($n1, $n2, $n3, $n4){
    return ($n1 + $n2 + $n3 + $n4) / 4; 
}

echo media(10,5,5,10);

//--------------------------------------------------------------------------------------------------------------

echo "<hr>";
echo "<h2>Atividade 3:</h2>". "Construa uma função, chamada media_matriz(), que retorne a média das notas da array";
echo "<br>";

$notas = [10,5,10,5,3,1];

function media_matriz($notas){
    $total = 0;
    foreach ($notas as $num) {
        $total += $num; 
};
    return $total / count($notas); 
}

echo media_matriz($notas);

//--------------------------------------------------------------------------------------------------------------

echo "<hr>";
echo "<h2>Atividade 4:</h2>". "Construa uma função, chamada menor_nota(), que retorne a menor nota da array";
echo "<br>";

function menor_nota($notas){
    
    $menor_nota = $notas[0];
    
    foreach ($notas as $nota) {
        if ($nota < $menor_nota) {
            $menor_nota = $nota;
        }
    }
    return $menor_nota;
};

echo "A menor nota é: ". menor_nota($notas);