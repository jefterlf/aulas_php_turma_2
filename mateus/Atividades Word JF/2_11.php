<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Intermedi�rio</title>
    </head>
    <body>
        <form method="post" action="2_11.php">
            <label>1� N�mero:</label>
            <input type="number" name="numero1" id="numero1"/>
            <label>2� N�mero:</label>
            <input type="number" name="numero2" id="numero2"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
          if(isset($_POST['enviar'])){   
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                
          }
        ?>
    </body>
</html>