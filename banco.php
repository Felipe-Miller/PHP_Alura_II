<?php

<<<<<<< HEAD
=======
exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

>>>>>>> 746708944227b2637a0a13d8803b365ee2db06b7
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

<<<<<<< HEAD

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
=======
$contasCorrentes['123.456.789-10']['saldo'] -= 500;
$contasCorrentes['123.456.789-11']['saldo'] -= 500;

if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
    
    echo "Você não pode sacar este valor" . PHP_EOL;

} else 

    $contasCorrentes['123.456.789-11']['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);

>>>>>>> 746708944227b2637a0a13d8803b365ee2db06b7
}