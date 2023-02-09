<?php

$conta1 = [  
    'titular' => 'Titular: Vinicius',
    'saldo' => 'Saldo: 1000'  
];

$conta2 = [  
    'titular' => 'Titular: Maria',
    'saldo' => 'Saldo: 1000',
];

$conta3 = [   
    'titular' => 'Titular: Alberto',
    'saldo' => 'Saldo: 300'
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {

    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
    echo $contasCorrentes[$i] ['saldo'] . PHP_EOL . PHP_EOL;

}
