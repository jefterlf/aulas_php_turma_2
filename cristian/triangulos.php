<!DOCTYPE html>
<html>
    <head>
        <title>lol</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="triangulos.php" method="post">
            <h2 align="center"> Triângulos </h2>

                <div align="center">

                    <label >Comprimento de AB:</label>
                    <input type="text" name="ab" id="ab" placeholder="Valor AB" />
                    </br>
                    <label>Comprimento de AC:</label>
                    <input type="text" name="ac" id="ac" placeholder="Valor AC" />
                    </br>
                    <label>Comprimento de BC:</label>
                    <input type="text" name="bc" id="bc" placeholder="Valor BC" />
                    </br>
                    <label> Ângulo A:</label>
                    <input type="text" name="alfa" id="alfa" placeholder="Valor alfa" />
                    </br>
                    <label> Ângulo B:</label>
                    <input type="text" name="beta" id="beta" placeholder="Valor beta" />
                    </br>
                    <label> Ângulo C:</label>
                    <input type="text" name="gama" id="gama" placeholder="Valor gama" />
                    </br>
                    <input type="submit" name="enviar" value="enviar" />

                </div>

        </form>
        <?php
        if(isset($_POST['enviar'])){
            $ab = $_POST['ab'];
            $ac = $_POST['ac'];
            $bc = $_POST['bc'];
            $lados = "";

            if( $ab == $ac && $ac == $bc && $ab == $bc) {
                $lados = "Triângulo Equilátero";
            }
            elseif( ($ab == $ac && $ab != $bc && $ac != $bc) || ( $ab == $bc && $ab != $ac && $bc != $ac ) || ( $ac == $bc && $ac != $ab && $bc != $ab ) ) {
                $lados = "Triângulo Isóceles";
            }
            elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
                $lados = "Triângulo Escaleno";
            }  

            echo "<h2 align= center>$lados</h2>";

            $alfa = $_POST['alfa'];
            $beta = $_POST['beta'];
            $gama = $_POST['gama'];
            $angulo = "";

            if( $alfa < 90 && $beta < 90 && $gama < 90 ) {
                $angulo = "Triângulo Acutângulo";
            }elseif( ($alfa > 90) || ($beta > 90) || ($gama > 90) ) {
                $angulo = "Triângulo Obtusângulo";
            }elseif( ($alfa == 90) || ($beta == 90) || ($gama == 90) ){
                $angulo = "Triângulo Retângulo";
            }

            echo "<h2 align= center>$angulo</h2>";
        }
        ?>
    </body>
</html>