<?php

//aprendendo array no php

echo "<h1>Utilizando Array no PHP!</h1>";

$listaCompra = ["arroz","feijao","banana","maça"];

//debugar array

print_r($listaCompra);
echo '<hr>';

var_dump($listaCompra);
echo '<hr>';

echo '<pre>';
print_r($listaCompra);
echo '</pre>';
echo '<hr>';

echo '<pre>';
var_dump($listaCompra);
echo '</pre>';
echo '<hr>';



########### array assosiativo ###########

echo '<h2> Array assosiativo</h2>';

$listaCompras = [
    12 => 'arroz', 
    26 => 'feijao', 
    22 => 'banana', 
    36 => 'maça', 
];

var_dump($listaCompras);

echo '<br>';

echo $listaCompras[26];

#################### Array Multidimensional ####################

echo '<h2> Array multidimensional</h2>';

$compraLista = [
    'alimentos' =>[
        'arroz',
        'feijao',
    ],
    'frutas' =>[
        'abacaxi',
        'banana',
        'tomate',
    ],
    'massas' =>[
        'lazanha',
        'macarrao',
    ],
    ];

    $compraLista['frutas'][] = 'pera';

    var_dump($compraLista);

    echo $compraLista['frutas'][2];


##deletar a banana da array desafio
    echo $compraLista['frutas'][2];


    $listaDeCompra = [
        11=> 'arroz',
        14=> 'feijao',
        15=> 'macarrao',
        17=> 'massa',
    ];

foreach($listaDeCompra as $item){
    echo $item.'<br>';
}

    foreach($listaDeCompra as $chaves => $item){
        echo "<strong>Informações do produto</strong><br>";
        echo "Chave de indice é: $chaves <br>";
        echo "O valor é: $item <br>";
        echo "<hr>";
    };
    

