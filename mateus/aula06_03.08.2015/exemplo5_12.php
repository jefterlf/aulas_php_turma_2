<?php
    $i = 0;
    $k = 0;
    while ($k < 10)
    {
        $i++;
        $k++;
        while($i < 20)
        {
            if ($i==10)
            {    
                echo "Encerrando o primeiro while...<br>";
                break;
                echo "Essa linha n�o vai ser impressa!!!";
            }
            elseif ($i==15)
            {
                echo "Encerrando os dois whiles...";
                break 2;
            }
            $i++;
        }
    } 
?>