<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Igual - maior ou menor</title>
    </head>
    <body>
        <form method="post" action="2_3.php">
            <label>N�mero:</label>
            <input type="number" name="numero" id="numero" placeholder="Escreva n�meros quaisquer, at� negativo." />
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $numero = $_POST['numero'];
                 if($numero < 0){
                     echo "Valor negativo";
                 }elseif($numero > 0){
                     echo "Valor positivo";
                 }elseif($numero == 0){
                     echo "Igual a zero";
                 }
             }
        ?>
    </body>
</html>