<?php
    class Classe {
        static $variavel_estatica = 10;
            function soma ($numero) {
                Classe::$variavel_estatica += $numero;
            }
    }
    $obj = new Classe();
    $obj->soma(2);
    $obj = new Classe();
    $obj->soma(2);
    print Classe::$variavel_estatica;
?>