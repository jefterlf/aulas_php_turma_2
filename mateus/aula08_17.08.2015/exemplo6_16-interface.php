<?php
    interface MinhaInterface {
        public function Teste();
    }
    class MinhaClasse implements MinhaInterface {
        public function Teste() {
            // � que uma classe pode implementar diversas interfaces utilizando esta palavra reservada implements...
        }
    }
?>