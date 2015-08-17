<?php
    function teste ($valor)
    {
        if ($valor != 0)
        {
            echo "Foi chamada a funão teste passando o valor $valor <br>";
            teste ($valor - 1);
        }
    }
    teste (7);
?>