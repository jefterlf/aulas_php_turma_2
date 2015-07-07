<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário de Triângulos</title>
        <link href="style.css" />
    </head>
    <body>
        <form action="trabalho triangulos.php">
            <label>Insira um valor para o Lado AB:</label>
            <input type="text" name="ab" id="ab" placeholder="Ex: 15" />
            <label>Insira um</label>
        </form>
        <?php
            $ab = $_POST['ab'];
            $ac = $_POST['ac'];
            $bc = $_POST['bc'];
            $lados = "";

            if( $ab == $ac && $ac == $bc && $ab == $bc) {
                $lados = "Triângulo Equilátero!";
            }elseif( ($ab == $ac && $ab != $bc && $ac != $bc) || ( $ab == $bc && $ab != $ac && $bc != $ac ) || ( $ac == $bc && $ac != $ab && $bc != $ab ) ) {
                $lados = "Triângulo Isóceles!";
            }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
                $lados = "Triângulo Escaleno!";
            }  

            echo "<h2 align= center>$lados</h2>";

            $anga = $_POST['anga'];
            $angb = $_POST['angb'];
            $angc = $_POST['angc'];
            $angulo = "";

            if( $anga < 90 && $angb < 90 && $angc < 90 ) {
                $angulo = "Triângulo Acutângulo!";
            }elseif( ($anga > 90) || ($angb > 90) || ($angc > 90) ) {
                $angulo = "Triângulo Obtusângulo!";
            }elseif( ($anga == 90) || ($angb == 90) || ($angc == 90) ){
                $angulo = "Triângulo Retângulo!";
            }

            echo "<h2 align= center>$angulo</h2>";

        ?>
    </body>
</html>