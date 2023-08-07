<?php

/*1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. 
Se o valor da soma for negativo a função deverá o valor 0.*/

function somarNumeros($num1, $num2){
    $resultado = $num1 + $num2;

    if ($resultado < 0) {
        return 0;
    }else{

    return $resultado;
}
}


echo somarNumeros(-10,-2);

?>