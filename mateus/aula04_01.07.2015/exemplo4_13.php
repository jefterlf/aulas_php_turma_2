<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>objeto</title>
    </head>
    <body>
       <?php
            class Teste {
                function Saudacao() {
                    echo "Oi pessoal!";
                }
            }
            $objeto = new Teste; //$objeto se torna uma instância da classe teste
            $objeto -> Saudacao();
       ?>
    </body>
</html>