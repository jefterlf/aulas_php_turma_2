<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>calorias</title>
</head>
<body>



        <table border ="10" align="center">
            <tr>
                <td></td>
                <td>prato</td>
                <td>Sobremesa</td>
                <td>Bebida</td>
            </tr>
            <tr>
            <td>1</td>
            <td>vegetariano</td>
            <td>abacaxi</td>
            <td>chá</td>
            </tr>
            <tr>
            <td>2</td>
            <td>peixe</td>
            <td>sorvete diet</td>
            <td>suco de laranja</td>
            </tr>
            <tr>
            <td>3</td>
            <td>frango</td>
            <td>mousse diet</td>
            <td>suco de melao</td>
            </tr>
            <tr>
            <td>4</td>
            <td>carne</td>
            <td>mousse chocolate</td>
            <td>refrigerante</td>
            </tr>
            
        </table>


 <form action="calorias.php" method="post">
            <h2 align="center"> Medidor de calorias </h2>

                <div align="center">

                    <label >Prato:</label>
                    <input type="text" name="prato" id="prato" placeholder="Escolha seu prato" />
                    </br>

                    <label >Sobremesa:</label>
                    <input type="text" name="doce" id="doce" placeholder="Escolha sua sobremesa" />
                    </br>

                    <label >Bebida:</label>
                    <input type="text" name="drink" id="drink" placeholder="Escolha sua bebida" />
                    </br>



                    
                    <input type="submit" name="enviar" value="enviar" />

                </div>

        </form>

<div align="center">
  <?php


         if(isset($_POST['enviar'])){
            $porch = $_POST["prato"];
            $upertab =$_POST["doce"];
            $kanpai = $_POST["drink"];
        
                $prato = array ( "180", "230", "250", "350");
                $sobremesa = array ( "75", "110", "170", "200");
                $bebida = array ( "20", "70", "100", "65");
                $totalpra = "";
                $totalsob = "";
                $totalbeb = "";
               


            if ($porch == "1") {
                $totalpra = $prato["0"];
                 }

            elseif ($porch == "2") {
                $totalpra = $prato["1"];

            }
            elseif ($porch == "3") {
                $totalpra = $prato["2"];

            }
            elseif ($porch == "4") {
                $totalpra = $prato["3"];

            }


            if ($upertab == "1") {
                $totalsob = $sobremesa["0"];
                 }

            elseif ($upertab == "2") {
                $totalsob = $sobremesa["1"];

            }
            elseif ($upertab == "3") {
                $totalsob = $sobremesa["2"];

            }
            elseif ($upertab == "4") {
                $totalsob = $sobremesa["3"];

            }


            if ($kanpai == "1") {
                $totalbeb = $bebida["0"];
                 }

            elseif ($kanpai == "2") {
                $totalbeb = $bebida["1"];

            }
            elseif ($kanpai == "3") {
                $totalbeb = $bebida["2"];

            }
            elseif ($kanpai == "4") {
                $totalbeb = $bebida["3"];

            }
           
            $totalsoma = $totalpra + $totalsob + $totalbeb;
                

                echo "Prato: ", $totalpra, "cal`s" . "<br>";
                echo "Sobremesa: ", $totalsob, "cal`s" . "<br>";
                echo "Bebida: ", $totalbeb, "cal`s" . "<br>";
                echo "O total de calorias da refeição é de: ", $totalsoma , "cal`s" . "<br>";

                                
                   }              
  ?>
  </div>
</body>
</html>



      