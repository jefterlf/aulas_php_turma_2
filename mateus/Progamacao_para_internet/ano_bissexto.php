<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Ano bissexto</title>
        <link rel="stylesheet" type="text/css" href="estilo/style_ano-bissexto.css" />
    </head>
    <body>
        <form method="post" action="ano_bissexto.php">
            <label id="insira">Insira o ano:</label>
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