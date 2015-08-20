<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Imposto de Renda</title>
        <link rel="stylesheet" type="text/css" href="estilo/style_imposto-de-renda.css" />
    </head>
    <body>
        <form method="post" action="funcao_imposto-de-renda.php">
            <label class="labelF">Nome:</label>
            <input type="text" name="nome" id="nome" class="inputF" />     
            <label class="labelF">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="inputF" />
            <label class="labelF">Renda Mensal:</label>
            <input type="text" name="renda" id="renda" class="inputF" />
            <input type="submit" name="enviar" id="enviar" class="inputF" />
        </form>
        <?php
        if(isset($_POST['enviar'])){  
            $rendaM = $_POST['renda'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            
            if ( $rendaM <= 1637.11 ){
                echo "O sal�rio de $nome n�o teve redu��o no imposto de renda.";
                echo "<br>";
                echo "Seu sal�rio � $rendaM";
            }
            
            if ( ($rendaM > 1637.12) && ($rendaM <= 2453.50) ){
                $resulIR = ($rendaM / 100) * 7.5;
                $impostoR = $resulIR - 122.78;
                echo "Foi reduzido do seu sal�rio $impostoR";
            }
            
            if ( ($rendaM > 2453.51) && ($rendaM <= 3271.38) ){
                $resulIR = ($rendaM / 100) * 15;
                $impostoR = $resulIR - 122.78;
                echo "Foi reduzido do seu sal�rio $impostoR";
            }
            
            if ( ($rendaM > 3271.39) && ($rendaM <= 4087.65) ){
                $resulIR = ($rendaM / 100) * 22.5;
                $impostoR = $resulIR - 122.78;
                echo "Foi reduzido do seu sal�rio $impostoR";
            }
            
            if ( $rendaM > 4087.65 ){
                $resulIR = ($rendaM / 100) * 27.5;
                $impostoR = $resulIR - 122.78;
                echo "Foi reduzido do seu sal�rio $impostoR";
            }
        }
        ?>
    </body>
</html>