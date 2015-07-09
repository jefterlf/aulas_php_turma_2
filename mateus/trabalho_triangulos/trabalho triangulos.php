<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário de Triângulos</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <form action="trabalho triangulos.php" method="post">
            <h2 align="center" id="h2titulo"> Formulário de Triângulos </h2>
            <label>Insira um valor para o lado AB:</label>
            <input type="text" name="ab" id="ab" placeholder="Ex: 15" class="inputstyle" />
            </br>
            <label>Insira um valor para o lado AC:</label>
            <input type="text" name="ac" id="ac" placeholder="Ex: 5" class="inputstyle" />
            </br>
            <label>Insira um valor para o lado BC:</label>
            <input type="text" name="bc" id="bc" placeholder="Ex: 55" class="inputstyle" />
            </br>
            <label>Insira um valor para o lado Ângulo A:</label>
            <input type="text" name="anga" id="anga" placeholder="Ex: 90" class="inputstyle" />
            </br>
            <label>Insira um valor para o lado Ângulo B:</label>
            <input type="text" name="angb" id="angb" placeholder="Ex: 120" class="inputstyle" />
            </br>
            <label>Insira um valor para o lado Ângulo C:</label>
            <input type="text" name="angc" id="angc" placeholder="Ex: 180" class="inputstyle" />
            </br>
            <input type="submit" name="enviar" value="enviar" />
        </form>
        <?php
        if(isset($_POST['enviar'])){
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
        }
        ?>
    </body>
</html>