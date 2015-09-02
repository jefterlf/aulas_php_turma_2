<?php
    function soma_valores ($valor1, $valor2, $valor3)
    {
        $soma = $valor1 + $valor2 + $valor3;
        echo "A soma dos valores $valor1, $valor2 e $valor3 ";
        echo "é $soma";
    }
    $n1 = 10;
    $n2 = 20;
    $n3 = 50;
    soma_valores ($n1, $n2, $n3);
?>