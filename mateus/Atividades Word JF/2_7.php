<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Peso ideal</title>
    </head>
    <body>
        <form method="post" action="2_7.php">
            <label>Sexo:</label>
            <input type="text" name="sexo" id="sexo"/>
            <label>Altura:</label>
            <input type="text" name="altura" id="altura"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $sexo = $_POST['sexo'];
                 $altura = $_POST['altura'];
                 if(($sexo = "f") && ($sexo = "feminino") && ($sexo = "mulher")){
                     $pesoideal = (62.1 * $altura)-44.7;
                     echo "Seu peso ideal é $pesoideal";
                 }elseif(($sexo = "m") && ($sexo = "masculino") && ($sexo = "homem")){
                     $pesoideal = (72.7 * $altura)-58;
                     echo "Seu peso ideal é $pesoideal";
                 }
             }
        ?>
    </body>
</html>