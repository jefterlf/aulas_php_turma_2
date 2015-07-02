<?php
    $soma = 0;
    $valor1 = 10;
    $valor2 = 20;
    $valor3 = 30;
    $soma += $valor1; // $soma fica com 10
    $soma += $valor2; // $soma fica com 10+20 = 30
    $soma *= $valor3; // $soma fica com 30*30 = 900
    $soma %= 100;     // $soma fica com 900%100 = 0
    echo $soma;