<?php
    function fator ($number)
    {
        if ($number < 0)
        {
            return -1;
        }
        if ($number <= 1)
        {
            return 1;
        }
        return $number * fator ($number - 1);
    }
    echo "O fatorial de 3 é " . fator(3);
    echo "<br>O fatorial de 4 é " . fator(4);
    echo "<br>O fatorial de 5 é " . fator(5);
?>