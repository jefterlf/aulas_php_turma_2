<?php
    function algo ($dado)
    {
        if ($dado != 0)
        {
            echo "Foi chamada a fun��o teste passando o valor $dado <br>";
            algo ($dado - 1);
        }
    }
    algo (14);
?>