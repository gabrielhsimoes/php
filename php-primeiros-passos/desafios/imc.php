<?php

/*  A partir da altura e peso, calcule o IMC através da fórmula
    e exiba ao usuário se está:

    - ABAIXO DO PESO;
    - DENTRO DO PESO;
    - ACIMA DO PESO;
*/ 

$altura = 1.74;
$peso = 120;


$imc = $peso / ($altura * $altura); //$altura ** 2

echo "--------------- CÁLCULO DE IMC ---------------" . PHP_EOL;

echo "Seu IMC é: $imc" . PHP_EOL;

if($imc < 18.5){
    echo "Você está: ABAIXO DO PESO!";

}else if($imc >= 18.5 && $imc <= 24.9) {

    echo "Você está: DENTRO DO PESO!";
}else{

    echo "Você está: ACIMA DO PESO!";
}
