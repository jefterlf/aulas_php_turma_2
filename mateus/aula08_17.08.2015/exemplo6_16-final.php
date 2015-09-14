<?php
    class MinhaClasse {
        final function Teste() {
            // Nesse exemplo, se fosse declado um método com o nome Teste em uma subclasse de MinhaClasse, ele não iria sobrescrever o método declarado como final...
        }
    }
    // ou
    final class MinhaClasse2 {
        // Isso significa que ela não poderá ter subclasses...
    }
?>