<?php

$pessoa = [
    1=> [ 
        'nome' => 'João Batista',
        'cargo' => 'Professor',
        'competencias' => [
            'informatica' => ['word', 'excel'],
            'formacao' => ['Analista de sistema','Pós em desenvolvimento de Software'],
        ],    
    ],
    2 => [
        'nome' => 'Maria dos Santos',
        'cargo' => 'Enfermeira',
        'competencias' => [
            'informatica' => ['word', 'excel', 'powerPoint', 'internet'],
            'formacao' => ['Enfermeira' => 'Especialista em Centro Cirurgico'],
            'Pós em Urgencia'
        ],
    ],
];

echo $pessoa[1]['competencias']['formacao'][1] . "<br>";
echo $pessoa[2]['competencias'][0] . "<br>";
echo $pessoa[2]['competencias']['formacao']['Enfermeira'];