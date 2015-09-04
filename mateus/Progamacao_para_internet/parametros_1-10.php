<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>entre 1 e 10</title>
        <link rel="stylesheet" type="text/css" href="estilo/style_paramentros.css" />
    </head>
    <body>
        <form method="post" action="parametros_1-10.php">
            <label id="number">Número:</label>
            <input type="text" name="numero" id="numero" />
            <input type="submit" name="enviar" id="enviar" />
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $numero = $_POST['numero'];
                
                function tabuada ($numero)
                {
                    if ( ($numero > 1) && ($numero < 10) ){
                        for ( $i = 1; $i <= 10; $i++){
                            $tabuada = $numero * $i;
                            echo "<table> <tr> <td> $numero x $i = " . $tabuada . "</td> </tr> </table>";
                            echo "<br>";
                        }
                    }
                }
                tabuada ($numero);
            }
        ?>
    </body>
</html>