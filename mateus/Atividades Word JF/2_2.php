<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Igual - maior ou menor</title>
    </head>
    <body>
        <form method="post" action="2_2.php">
            <label>Insira seu n�mero:</label>
            <input name="numero" type="number" id="numero" placeholder="Exemplo: 10, 7, 15, ..."/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $numero = $_POST['numero'];
                if($numero >= 10){
                    echo "O n�mero � igual ou maior que 10.";
                }else{
                    echo "O n�mero n�o � igual ou maior que 10.";
                }
            }
        ?>
    </body>
</html>