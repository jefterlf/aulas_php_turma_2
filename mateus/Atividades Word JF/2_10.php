<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>fatorial</title>
    </head>
    <body>
        <form method="post" action="2_10.php">
            <label>Número:</label>
            <input type="number" name="numero" id="numero"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
          if(isset($_POST['enviar'])){   
                $numero = $_POST['numero'];
                $cont = 1;
                echo $numero. "! = ";
                for($i = $numero; $i > 1; $i--){
                    $cont *= $numero;
                    $numero--;
                }
                echo "$cont";
          }
        ?>
    </body>
</html>