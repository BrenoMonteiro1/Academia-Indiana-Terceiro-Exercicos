<?php

/*4- Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela <abaixo:></abaixo:>*/

function calculadoraIMC($altura, $peso){
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        return "Magreza";
    } 
    elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Normal";
    } 
    elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } 
    else {
        return "Obesidade";
    }
}

echo calculadoraIMC(1.70, 65);
