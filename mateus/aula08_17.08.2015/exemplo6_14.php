<?php
    class Classe1 {
        private $var1 = "Ol�, var1\n";
        protected $var2 = "Ol�, var2\n";
        protected $var3 = "Ol�, var3\n";
        function bomDia() {
            print "Classe1: ". $this -> var1. "<br>";
            print "Classe1: ". $this -> var2. "<br>";
            print "Classe1: ". $this -> var3. "<br><br>";
        }
    }
    class Classe2 extends Classe1 {
        function bomDia() {
            Classe1::bomDia();                          // Exibe
            print "Classe2: ". $this -> var1. "<br>";  // N�o exibe nada
            print "Classe2: ". $this -> var2. "<br>";  // Exibe
            print "Classe2: ". $this -> var3. "<br>";  // Exibe
        }
    }
    $obj = new Classe1();
    $obj -> bomDia();
    $obj = new Classe2();
    $obj -> bomDia();
?>