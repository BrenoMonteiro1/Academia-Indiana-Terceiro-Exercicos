<?php

/*3- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até R$ 3.000,00 , reajuste de 50%
• salários de R$ 3.000,00 ou mais, reajuste de 30%*/

function reajusteSalario($salario){
    $reajuste = 0;
    if($salario <= 3000){
        $salario += $salario * 0.50;
        return $salario;
    }else{
        $salario += $salario * 0.30;
        return $salario;
    }
}

echo reajusteSalario(1000);

?>