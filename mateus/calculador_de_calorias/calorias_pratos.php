<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculador de Calorias</title>
    </head>
    <body>
        <form action="calorias_pratos.php" method="post">
            <h2 align="center">Calculador de Calorias</h2>
            <label>Pratos</label>
            <select name="vprato" id="vprato">
                <option value="vegetariano">Vegetariano</option>
                <option value="peixe">Peixe</option>
                <option value="frango">Frango</option>
                <option value="carne">Carne</option>
            </select>
            <br>
            <label>Sobremesas</label>
            <select name="vsobremesa" id="vsobremesa">
                <option value="abacaxi">Abacaxi</option>
                <option value="sorvete diet">Sorvete diet</option>
                <option value="mousse diet">Mousse diet</option>
                <option value="abacaxi">Mousse chocolate</option>
            </select>
            <br>
            <label>Bebidas</label>
            <select name="vbebidas" id="vbebidas">
                <option value="chá">Chá</option>
                <option value="suco de laranja">Suco de laranja</option>
                <option value="suco de melão">Suco de Melão</option>
                <option value="refrigerante">Refrigerante</option>
            </select>
            <br>
            <input type="submit" name="enviar" value="enviar" />
        </form>
        <?php
            if(isset($_POST['enviar'])){
                
                echo $_POST['vprato']. "<br>";
                echo $_POST['vsobremesa']. "<br>";
                echo $_POST['vbebidas']. "<br>";
                $vprato = array ("vegetariano", "peixe", "frango", "carne");
                $vsobremesa = array ("abacaxi", "sorvete diet", "mousse diet", "mousse chocolate");
                $vbebida = array ("chá", "suco de laranja", "suco de melão", "refrigerante");
                $totalcal = 0;
                
                $vprato["vegetariano"] = 180;
                $vprato["peixe"] = 230;
                $vprato["frango"] = 250;
                $vprato["carne"] = 350;
                
                $vsobremesa["abacaxi"] = 75;
                $vsobremesa["sorvete diet"] = 110;
                $vsobremesa["mousse diet"] = 170;
                $vsobremesa["mousse chocolate"] = 200;
                
                $vbebida["chá"] = 20;
                $vbebida["suco de laranja"] = 70;
                $vbebida["suco de melão"] = 100;
                $vbebida["refrigerante"] = 65;   
                
                if( $_POST['vprato'] == "vegetariano" ){
                    $totalcal += $vprato["vegetariano"];
                }elseif( $_POST['vprato'] == "peixe" ){
                    $totalcal += $vprato["peixe"];
                }elseif( $_POST['vprato'] == "frango" ){
                    $totalcal += $vprato["frango"];
                }elseif( $_POST['vprato'] == "carne" ){
                    $totalcal += $vprato["carne"];
                }
                
                if( $_POST['vsobremesa'] == "abacaxi" ){
                    $totalcal += $vsobremesa["abacaxi"];
                }elseif( $_POST['vsobremesa'] == "sorvete diet" ){
                    $totalcal += $vsobremesa["sorvete diet"];
                }elseif( $_POST['vsobremesa'] == "mousse diet" ){
                    $totalcal += $vsobremesa["mousse diet"];
                }elseif( $_POST['vsobremesa'] == "mousse chocolate" ){
                    $totalcal += $vsobremesa["mousse chocolate"];
                }
                
                if( $_POST['vbebida'] == "chá" ){
                    $totalcal += $vbebida["chá"];
                }elseif( $_POST['vbebida'] == "suco de laranja" ){
                    $totalcal += $vbebida["suco de laranja"];
                }elseif( $_POST['vbebida'] == "suco de melão" ){
                    $totalcal += $vbebida["suco de melão"];
                }elseif( $_POST['vbebida'] == "refrigerante" ){
                    $totalcal += $vbebida["refrigerante"];
                }
                
                echo "<h2 align='center'>$totalcal</h2>";
                $totalcal = 0;
            }
        ?>
    </body>
</html>