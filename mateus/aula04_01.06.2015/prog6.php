<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Porto Alegre</title>
    </head>
    <body>
        <?php
            $texto = "Porto Alegre";
            $futuro_identificador = "cidade";
            $$futuro_identificador = $texto;
            
            echo "<h2 align=center>";
            echo "Minha cidade é $cidade";
            echo "</h2>";
        ?>
    </body>
</html>