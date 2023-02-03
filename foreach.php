<?php
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Titular: Maria',
        'saldo' => 'Saldo: 1000',
    ],
    12345678911 => [
        'titular' => 'Titular: Maria',
        'saldo' => 'Saldo: 1000',
    ], 
    12345678912 => [
        'titular' => 'Titular: Alberto',
        'saldo' => 'Saldo: 300'
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}
