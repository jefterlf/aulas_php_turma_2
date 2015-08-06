<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Salário</title>
    </head>
    <body>
        <form method="post" action="2_8.php">
            <label>Seu salário:</label>
            <input type="text" name="salario" id="salario"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $salario = $_POST['salario'];
                 if($salario <= 300){
                     $reajuste = (($salario * 50)/100)+$salario;
                     echo "Seu salário reajustado é $reajuste";
                 }elseif($salario > 300){
                     $reajuste = (($salario * 30)/100)+$salario;
                     echo "Seu salário reajustado é $reajuste";
                 }
             }
        ?>
    </body>
</html>