<?php
    class MinhaClasse {
        final function Teste() {
            // Nesse exemplo, se fosse declado um m�todo com o nome Teste em uma subclasse de MinhaClasse, ele n�o iria sobrescrever o m�todo declarado como final...
        }
    }
    // ou
    final class MinhaClasse2 {
        // Isso significa que ela n�o poder� ter subclasses...
    }
?>