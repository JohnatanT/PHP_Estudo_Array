<?php

//Chaves Associativas

//Posso decidir o "nome" que meu indice vai ter
$n = array("nome"=>"Maria","idade"=>10,"peso"=>60.5);
//Em PHP meu vetor não tem um tipo especifico, ele pode receber varios tipos de valores
print_r($n);
echo "</br>";
$n["fuma"] = true;

//Foreach com chaves associativas
foreach ($n as $k => $v){
    echo "O campo $k possui $v </br>";
}

