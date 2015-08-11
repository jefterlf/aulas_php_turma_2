<?php
    function clubes(){
        $clubes [] = "Grêmio";
        $clubes [] = "Palmeiras";
        $clubes [] = "Flamengo";
        $clubes [] = "Corinthians";
        $clubes [] = "Bahia";
        return $clubes;
    }

    $nomes = clubes();
    
    for($i = 0 ; $i < sizeof($nomes) ; $i++){
        echo "\$nomes[$i] vale $nomes[$i] <br>";
    }
?>