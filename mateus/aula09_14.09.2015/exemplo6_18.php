<?php
    class MinhaClasse {
        function __construct() {
            $this->nome = "MinhaClasse";
            print "Este � construtor da classe ". $this->nome."<br>";
        }
        function __destruct() {
            print "Este � o destrutor da classe ". $this->nome;
        }
    }
    $obj = new MinhaClasse();
?>