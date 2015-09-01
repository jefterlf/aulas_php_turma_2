<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Exercício 04</title>
        <link rel="stylesheet" type="text/css" href="estilo/prog-internet_04.css" />
    </head>
    <body>
        <form action="prog_internet_04.php" method="post">       
            <label>Matrícula:</label>
            <input type="text" name="matricula" id="matricula" placeholder="Matrícula" class="input_form"/>
            <br>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" class="input_form" required/>
            <br>
            <label>Telefone:</label>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone" class="input_form"/>
            <br>
            <label>Endereço:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="input_form"/>
            <br>
            <label>Idade:</label>
            <input type="text" name="idade" id="idade" placeholder="Idade" class="input_form" required/>
            <br>
            <label>Curso:</label>
            <input type="text" name="curso" id="curso" placeholder="Curso" class="input_form" required/>
            <br>
            <input type="submit" name="enviar" id="enviar"/>
        </form>    
        <?php
            if(isset($_POST['enviar'])){
                $idade = $_POST['idade'];
                
                if( $idade >= 18 ){
                    echo "<p id='cor-azul'>Matrícula realizada com sucesso!</p>";
                }elseif( $idade < 18 ){
                    echo "<p id='cor-vermelha'>Aluno Menor
                    de Idade – É necessário a assinatura do Pai ou Responsável!</p>";
                }
            }
        ?>
    </body>
</html>