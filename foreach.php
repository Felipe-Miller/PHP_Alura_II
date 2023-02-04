<?php

$contasCorrentes = [
   
    '123.456.789-10'  => [
        'titular' => 'Titular: Maria',
        'saldo' => 'Saldo: 1000',
    ],

    '123.456.789-11' => [
        'titular' => 'Titular: Maria',
        'saldo' => 'Saldo: 1000',
    ], 
    
    '123.456.789-12' => [
        'titular' => 'Titular: Alberto',
        'saldo' => 'Saldo: 300'
    ]

];

$contasCorrentes['123.258.852-12'] = [
    
    'titular' => 'Titular: Claudia',
    'saldo' => 'Saldo: 300'

];

foreach ($contasCorrentes as $cpf => $conta) {
  
    echo $cpf . " " . $conta['titular'] . PHP_EOL;

}
