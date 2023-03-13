<?php

$idade = 16;
//echo 'Olá mundo! Minha idade é ' . $idade . ' anos';
  
//para concatenar dados diferentes, como o exemplo acima, adicionamos .
//Então estou fazendo a junção de string e uma variável do tipo integer.

//echo "Olá mundo! Minha idade é $idade anos"; //usando aspas duplas, conseguir concatenar de maneira mais fácil.

//E se eu quiser quebrar linha?

// echo "Olá mundo!\r\n";

echo "Olá mundo!" . PHP_EOL;
// echo "\t";
echo "Eu tenho $idade anos";

echo PHP_EOL. PHP_EOL;

echo "Você só pode entrar se tiver mais de 18 anos\n";
echo "Você tem $idade anos. Pode entrar";

/*
Não fica algo muito agradável fazer desta maneira.
echo 'Olá! Meu nome é ' . $nome . '. Meu nome e-mail é ' . $email . '. Tenho ' . $idade . ' anos';
*/
 