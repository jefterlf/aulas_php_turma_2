<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Crescente</title>
    </head>
    <body>
        <form method="post" action="2_5.php">
            <label>Valor de A:</label>
            <input type="number" name="numeroA" id="numeroA"/>
            <label>Valor de B:</label>
            <input type="number" name="numeroB" id="numeroB"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $numeroA = $_POST['numeroA'];
                 $numeroB = $_POST['numeroB'];
                 if($numeroA > $numeroB){
                     echo "$numeroB $numeroA";
                 }elseif($numeroA < $numeroB){
                     echo "$numeroA $numeroB";
                 }
             }
        ?>
    </body>
</html>