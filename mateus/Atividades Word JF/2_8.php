<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Salário</title>
    </head>
    <body>
        <form method="post" action="2_8.php">
            
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $sexo = $_POST['sexo'];
                 $altura = $_POST['altura'];
                 if(($sexo = "f") && ($sexo = "feminino") && ($sexo = "mulher")){
                     $pesoideal = 62.1 * $altura;
                     echo "Seu peso ideal é $pesoideal";
                 }elseif(($sexo = "m") && ($sexo = "masculino") && ($sexo = "homem")){
                     $pesoideal = 72.7 * $altura;
                     echo "Seu peso ideal é $pesoideal";
                 }
             }
        ?>
    </body>
</html>