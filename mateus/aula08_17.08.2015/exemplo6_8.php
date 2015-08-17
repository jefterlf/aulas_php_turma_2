<?php
    function dobro ($valor)
    {
        $valor = 2 * $valor;
    }
    function duplica (&$valor)
    {
        $valor = 2 * $valor;
    }
    $valor = 5;
    dobro ($valor);
    echo $valor . "<br>";
    duplica ($valor);
    echo $valor;
?>