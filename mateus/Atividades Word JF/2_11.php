<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Intermediário</title>
    </head>
    <body>
        <form method="post" action="2_11.php">
            <label>1º Número:</label>
            <input type="number" name="numero1" id="numero1"/>
            <label>2º Número:</label>
            <input type="number" name="numero2" id="numero2"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
          if(isset($_POST['enviar'])){   
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                for($i = $numero1 + 1 ; $i < $numero2 ; $i++){
                    echo "$i ";
                }
                if($numero2 < $numero1){    
                    for($i = $numero1 - 1 ; $i > $numero2 ; $i--){
                        echo "$i ";
                    }
                }    
          }
        ?>
    </body>
</html>