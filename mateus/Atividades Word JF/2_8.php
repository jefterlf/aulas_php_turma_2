<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sal�rio</title>
    </head>
    <body>
        <form method="post" action="2_8.php">
            <label>Seu sal�rio:</label>
            <input type="text" name="salario" id="salario"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $salario = $_POST['salario'];
                 if($salario <= 300){
                     $reajuste = (($salario * 50)/100)+$salario;
                     echo "Seu sal�rio reajustado � $reajuste";
                 }elseif($salario > 300){
                     $reajuste = (($salario * 30)/100)+$salario;
                     echo "Seu sal�rio reajustado � $reajuste";
                 }
             }
        ?>
    </body>
</html>