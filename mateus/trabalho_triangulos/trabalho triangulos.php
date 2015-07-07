<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formul�rio de Tri�ngulos</title>
        <link rel=�stylesheet� type=�text/css� href=�style.css� />
    </head>
    <body>
        <form action="trabalho triangulos.php" method="post">
            <h2 align="center"> Formul�rio de Tri�ngulos </h2>
            <label>Insira um valor para o lado AB:</label>
            <input type="text" name="ab" id="ab" placeholder="Ex: 15" />
            </br>
            <label>Insira um valor para o lado AC:</label>
            <input type="text" name="ac" id="ac" placeholder="Ex: 5" />
            </br>
            <label>Insira um valor para o lado BC:</label>
            <input type="text" name="bc" id="bc" placeholder="Ex: 55" />
            </br>
            <label>Insira um valor para o lado �ngulo A:</label>
            <input type="text" name="anga" id="anga" placeholder="Ex: 90" />
            </br>
            <label>Insira um valor para o lado �ngulo B:</label>
            <input type="text" name="angb" id="angb" placeholder="Ex: 120" />
            </br>
            <label>Insira um valor para o lado �ngulo C:</label>
            <input type="text" name="angc" id="angc" placeholder="Ex: 180" />
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
                $lados = "Tri�ngulo Equil�tero!";
            }elseif( ($ab == $ac && $ab != $bc && $ac != $bc) || ( $ab == $bc && $ab != $ac && $bc != $ac ) || ( $ac == $bc && $ac != $ab && $bc != $ab ) ) {
                $lados = "Tri�ngulo Is�celes!";
            }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
                $lados = "Tri�ngulo Escaleno!";
            }  

            echo "<h2 align= center>$lados</h2>";

            $anga = $_POST['anga'];
            $angb = $_POST['angb'];
            $angc = $_POST['angc'];
            $angulo = "";

            if( $anga < 90 && $angb < 90 && $angc < 90 ) {
                $angulo = "Tri�ngulo Acut�ngulo!";
            }elseif( ($anga > 90) || ($angb > 90) || ($angc > 90) ) {
                $angulo = "Tri�ngulo Obtus�ngulo!";
            }elseif( ($anga == 90) || ($angb == 90) || ($angc == 90) ){
                $angulo = "Tri�ngulo Ret�ngulo!";
            }

            echo "<h2 align= center>$angulo</h2>";
        }
        ?>
    </body>
</html>