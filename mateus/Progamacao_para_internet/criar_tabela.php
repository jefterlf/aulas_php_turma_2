<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Criando Tabela pelo formulário</title>
        <link rel="stylesheet" type="text/css" href="estilo/tabela_style.css" />
    </head>
    <body>
        <form action="criar_tabela.php" method="get">
            <label>Número de Linhas:</label>
            <input type="text" name="numero-de-linhas" id="numero-de-linhas"/>
            <label>Colunas:</label>
            <input type="text" name="numero-de-colunas" id="numero-de-colunas"/>
            <label>Conteúdo (Texto):</label>
            <input type="text" name="conteudo" id="conteudo"/>
            <input type="submit" name="enviar" id="enviar"/>
        </form>
        <?php
            if(isset($_GET['enviar'])){
                $numero_linhas = $_GET['numero-de-linhas'];
                $numero_colunas = $_GET['numero-de-colunas'];
                $conteudo = $_GET['conteudo'];
                
                echo "<table>";
                for( $l = 1; $l <= $numero_linhas; $l++ ){
                    echo "<tr>";
                    for( $c = 1; $c <= $numero_colunas; $c++ ){
                        echo "<td>";
                        echo $conteudo;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>