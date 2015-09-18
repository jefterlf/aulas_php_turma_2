<?php
    class Calculo {
        private $resultado;
        function  __construct() {
            // gera o formulário
            print "<form method=\"POST\" action=\"exemplo6_21.php\">";
            print "<h2>Programa de Cálculo</h2>";
            print "<p>Primeiro Número: ";
            print "<input name=\"n1\" type=\"text\" size=\"5\" maxlength=\"5\" /><br />";
            print "Segundo número: ";
            print "<input name=\"n2\" type=\"text\" id=\"n2\" size=\"5\" maxlength=\"5\" /><br />";
            print "Escolha a operação: ";
            print "<select name=\"operacao\" id=\"operacao\">";
            print "<option value=\"adicao\" selected=\"selected\">Adição</option>";
            print "<option value=\"subtracao\" selected=\"selected\">Subtração</option>";
            print "<option value=\"multiplicacao\" selected=\"selected\">Multiplicação</option>";
            print "<option value=\"divisao\" selected=\"selected\">Divisão</option>>";
            print "<option value=\"potenciacao\" selected=\"selected\">Potenciação</option>";
            print "</selected></p>";
            print "<p><input type=\"submit\" name=\"calcular\" id=\"calcular\" value=\"CALCULAR\" /></p>";
            print "</form>";
        }
        function Adicao ($n1, $n2) {
            $this->resultado = $n1+$n2;
            print "Resultado da adição: $n1 + $n2 = ".$this->resultado;
        }
        function Subtracao ($n1, $n2) {
            $this->resultado = $n1-$n2;
            if($n2<0) {
                print "Resultado da subtração: $n1 - ($n2) = ". $this->resultado;
            }else {
                print "Resultado da subtração: $n1 - $n2 = ". $this->resultado;
            }
        }
        function Multiplicacao ($n1, $n2) {
            $this->resultado = $n1*$n2;
            print "Resultado da multiplicação: $n1 * $n2 = ". $this->resultado;
        }
        function Divisao ($n1, $n2) {
            if($n2==0) {
                print "Não é permitida a divisão por zero!";
            }else {
                $this->resultado = $n1/$n2;
                print "Resultado da divisão: $n1 / $n2 = ".$this->resultado;
            }
        }
        function Potenciacao ($n1, $n2) {
            
        }
    }
?>