<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>A+C igual - menor ou maior a B*D</title>
    </head>
    <body>
        <form method="post" action="2_4.php">
            <label>Valor de A:</label>
            <input type="number" name="numeroA" id="numeroA" placeholder="Valor de A..."/>
            <label>Valor de B:</label>
            <input type="number" name="numeroB" id="numeroB" placeholder="Valor de B..."/>
            <label>Valor de C:</label>
            <input type="number" name="numeroC" id="numeroC" placeholder="Valor de C..."/>
            <label>Valor de D:</label>
            <input type="number" name="numeroD" id="numeroD" placeholder="Valor de D..."/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $numeroA = $_POST['numeroA'];
                 $numeroB = $_POST['numeroB'];
                 $numeroC = $_POST['numeroC'];
                 $numeroD = $_POST['numeroD'];
                 $resultadoAC = $numeroA + $numeroC;
                 $resultadoBD = $numeroB * $numeroD;
                 if($resultadoAC == $resultadoBD){
                     echo "A+C é igual que B*D.";
                 }elseif($resultadoAC > $resultadoBD){
                     echo "A+C é maior que B*D.";
                 }elseif($resultadoAC < $resultadoBD){
                     echo "A+C é menor que B*D.";
                 }
             }
        ?>
    </body>
</html>