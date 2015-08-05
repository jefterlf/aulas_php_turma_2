<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Notas</title>
    </head>
    <body>
        <form method="post" action="2_6.php">
            <label>Nome do Aluno:</label>
            <input type="text" name="nome" id="nome"/>
            <label>Nota 1:</label>
            <input type="number" name="nota1" id="nota1"/>
            <label>Nota 2:</label>
            <input type="number" name="nota2" id="nota2"/>
            <label>Nota 3:</label>
            <input type="number" name="nota3" id="nota3"/>
            <label>Nota 4:</label>
            <input type="number" name="nota4" id="nota4"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
             if(isset($_POST['enviar'])){
                 $nome = $_POST['nome'];
                 $nota1 = $_POST['nota1'];
                 $nota2 = $_POST['nota2'];
                 $nota3 = $_POST['nota3'];
                 $nota4 = $_POST['nota4'];
                 $resultadofianl = ($nota1 + $nota2 + $nota3 + $nota4)/4;
                 if($resultadofianl >= 7){
                     echo "Aluno foi $nome aprovado.";
                 }elseif($resultadofianl < 7){
                     echo "Aluno foi $nome reprovado";
                 }
             }
        ?>
    </body>
</html>