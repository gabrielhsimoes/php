<?php

$idade = 19;
// $nome = 'Gabriel';

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL; //Quebra de linha


if ($idade >= 18){ //$nome == 'Gabriel'
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar!';
}


echo "Você só tem $idade anos, você não pode entrar!";