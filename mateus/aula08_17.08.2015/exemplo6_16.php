<?php
    abstract class ClasseAbstrata {
        abstract public function teste();
    }
    class ClasseImplementacao extends ClasseAbstrata {
        public function teste() {
            echo "M�todo teste() chamado!<br>";
        }    
    }
    $obj = new ClasseImplementacao;
    $obj -> teste();  
?>