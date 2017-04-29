<?php

//Chaves personalizadas


//Posso decidir em qual indice cada valor vai estar
$n = array(3=>5,7=>8,5=>4);
//Depois do meu maior indice será criado um novo
$n[] = 9;
//O valor 9 será colocado no indice 8, pois meu maior indice foi o 7
print_r($n);



//Desalocando um vetor

unset($n[8]);
//Estou desalocando da minha memória o indice 8

print_r($n);
