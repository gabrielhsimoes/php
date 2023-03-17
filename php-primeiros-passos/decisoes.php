<?php

$idade = 19;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL; //Quebra de linha


if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar!';
}
