<?php
    function teste ($valor)
    {
        if ($valor != 0)
        {
            echo "Foi chamada a fun�o teste passando o valor $valor <br>";
            teste ($valor - 1);
        }
    }
    teste (7);
?>