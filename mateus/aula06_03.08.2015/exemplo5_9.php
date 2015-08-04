<?php
    $vetor[0][0]= "elemento 00";
    $vetor[0][1]= "elemento 01";
    $vetor[1][0]= "elemento 10";
    $vetor[1][1]= "elemento 11";
    for($i=0 ; $i<2 ; $i++)
    {
        for($k=0 ; $k<2 ; $k++)
        {
            echo "O elemento da posiчуo $i,$k щ";
            echo $vetor [$i][$k] . "<br>";
        }
    }
?>