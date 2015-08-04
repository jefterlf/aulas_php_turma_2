<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Menor ou Maior que 10</title>
    </head>
    <body>
        <form method="post" action="2_1.php">
            <label>Número:</label>
            <input type="number" id="numero" name="numero" placeholder="Escreva um número aqui!"/>
            <input type="submit" name="enviar" id="enviar" />
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $numero = $_POST['numero'];
                if($numero < 10){
                    echo "O número é menor que 10";
                }else{
                    echo "O número é maior que 10";
                }
            }
        ?>
    </body>
</html>