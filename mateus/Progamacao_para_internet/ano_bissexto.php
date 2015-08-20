<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Ano bissexto</title>
    </head>
    <body>
        <form method="post" action="ano_bissexto.php">
            <label>Insira o ano:</label>
            <input type="text" name="ano" id="ano"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
        if(isset($_POST['enviar'])){
            $ano = $_POST['ano'];
            
            if( ($ano % 4 == 0) || ($ano % 400 == 0) ){
                echo "Este ano é bissexto.";
            }else{
                echo "Este não é bissexto.";
            }
        }
        ?>
    </body>
</html>