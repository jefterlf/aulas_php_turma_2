<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Menor ou Maior que 10</title>
    </head>
    <body>
        <form method="post" action="2_1.php">
            <label>N�mero:</label>
            <input type="number" id="numero" name="numero" placeholder="Escreva um n�mero aqui!"/>
            <input type="submit" name="enviar" id="enviar" />
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $numero = $_POST['numero'];
                if($numero < 10){
                    echo "O n�mero � menor que 10";
                }else{
                    echo "O n�mero � maior que 10";
                }
            }
        ?>
    </body>
</html>