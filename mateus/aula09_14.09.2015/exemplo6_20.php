<?php
    class Classe {
        public static function MetodoEstatico() {
            print "Estou executando este m�todo sem criar um objeto desta classe!";
        }
    }
    Classe::MetodoEstatico();
?>