<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>S0 até X</title>
    </head>
    <body>
        <form method="post" action="2_9.php">
            <label>Número:</label>
            <input type="number" name="numero" id="numero"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $numero = $_POST['numero'];
                 $cont = 0;
                 while($cont <= $numero){
                     echo "$cont ";
                     $cont++;
                 }
             }
        ?>
    </body>
</html>