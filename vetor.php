<?php
//Pode ser feito assim
$n[0] = 2;
$n[1] = 5;
$n[2] = 1;

//Também pode ser feito assim

$n = array(2,5,1);

//Colocar o valor na ultima posição di meu vetor
$n[] = 7;
print_r($n);
//Pode-se utilizar o RANGE também

$c = range(5,20,5);
//Meu primeiro valor vai ser 5, o ultimo vai ser 20 e ele vai pulando de 5 em 5.
print_r($c);