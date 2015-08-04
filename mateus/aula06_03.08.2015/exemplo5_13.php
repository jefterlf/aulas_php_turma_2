<?php
    $vetor = array (1, 3, 5, 8, 11, 12, 15, 20);
    for($i=0 ; $i<sizeof($vetor) ; $i++)
    {
        if ($vetor[$i] % 2 != 0)  //é impar
        { continue; }
        $num_par = $vetor[$i];
        echo "O número $num_par é par. <br>";
    }
?>