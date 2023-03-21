<?php

$idade = 16;
$numeroDePessoas = 1;
// $nome = 'Gabriel';

echo "Você só pode entrar se tiver a partir de 18 anos ou" . PHP_EOL;
echo "a partir de 16 anos acompanhado" . PHP_EOL . PHP_EOL;

if ($idade >= 18){ //$nome == 'Gabriel'
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar!';
} else if ($idade >= 16 && $numeroDePessoas > 1){

    echo "Você tem $idade anos, mas está acompanhado(a). Pode entrar!";
} else{

    echo "Você só tem $idade anos, você não pode entrar!";
}

echo PHP_EOL;
echo "Adeus!";
