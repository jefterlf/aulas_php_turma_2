<?php
    function fatorial ($numero)
    {
        if ($numero < 0)
        {
            return -1;
        }
        if ($numero <= 1)
        {
            return 1;
        }
        return $numero*fatorial($numero-1);
    }
    echo    "O fatorial de 3 � " . fatorial(3);
    echo    "<br>O fatorial de 4 � " . fatorial(4);
    echo    "<br>O fatorial de 5 � " . fatorial(5);
?>