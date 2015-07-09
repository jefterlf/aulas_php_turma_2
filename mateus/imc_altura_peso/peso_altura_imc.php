<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculador de IMC</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>    
    <body>
        <form action="peso_altura_imc.php" method="post">
            <h2 align="center">Calculador de IMC</h2>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome"  placeholder="Pedro"/>
            <label>Altura:</label>
            <input type="text" name="altura" id="altura" placeholder="1.71"/>
            <label>Peso:</label>
            <input type="text" name="peso" id="peso" placeholder="70" />
            <input type="submit" value="Enviar" name="enviar" id="enviar" />
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $nome = $_POST['nome'];
                $altura = $_POST['altura'];
                $peso = $_POST['peso'];
                $imc = round($peso / ($altura * $altura));

                if($imc < 20  ){
                    $mensagem = "abaixo do peso.";
                }        

                if( $imc >= 20 || ($imc <=25 && $imc >=20) ){
                    $mensagem = "normal.";
                }

                if( $imc > 25 || ($imc <= 30 && $imc > 25 ) ){
                    $mensagem = "com excesso de peso.";
                }

                if( $imc > 30 || ($imc <= 35 && $imc > 30 ) ){
                    $mensagem = "no n�vel de obesidade.";
                }

                if( $imc > 35 ){
                    $mensagem = "no n�vel de obesidade m�rbida.";
                }

                echo "<h2 align='center'>";
                echo "O IMC de $nome est� $mensagem";
                echo "</h2>";
            }
        ?>
    </body>
</html>