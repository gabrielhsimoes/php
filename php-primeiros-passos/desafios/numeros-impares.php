<?php

//Execute um programa de 0 a 100 e faça com que seja exibido todos os números ímpares

for($i = 0;$i <= 100;$i++){

    if($i % 2 != 0){
        echo "#$i" . PHP_EOL;
    }

}