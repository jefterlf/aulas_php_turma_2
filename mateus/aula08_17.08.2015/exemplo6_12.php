<?php
    class Loja
    {
        var $itens;
        function adiciona ($codigo, $quantidade) {
            if(isset($this->itens[$codigo]))
                $this->itens[$codigo] += $quantidade;
            else
                $this->itens[$codigo] = $quantidade;
        }
        function remove ($codigo, $quantidade) {
            if ($this->itens[$codigo] > $quantidade)
            {
                $this->itens[$codigo] -= $quantidade;
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    $estoque = new Loja;
    $estoque->adiciona("bermuda",2);
    $estoque->adiciona("camiseta", 3);
    echo "A loja já possui " . $estoque->itens["bermuda"] . " bermudas.<br>";
    echo "A loja já possui " . $estoque->itens["camiseta"] . " camisetas.<br>";
?>