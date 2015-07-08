<html>
<head lang="pt-br"> 
        <meta charset="utf-8">
        <meta author="Samara Ferreira" >	
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       	<title></title>
        <link rel="stylesheet" href="classificacaoTriangulos.css"  />
</head>
<body>
	<form Action="classificacaoTriangulos.php" method="post">
		<h1 align="center"> Preencha as informações pedidas à respeito dos triangulos </h1>

		<label class="tipo">Insira um valor para o lado AB: </label>
			<input type="text" name="AB" id="AB" size="5"  maxlenght:"5" placeholder="Ex: 3 "/>
				<br>
		<label class="tipo">Insira um valor para o lado AC: </label>
			<input type="text" name="AC" id="AC" size="5" maxlenght:"5"  placeholder="Ex: 4 "/>
				<br> 
		<label class="tipo">Insira um valor para o lado BC: </label>
			<input type="text" name="BC" id="BC"  size="5"  maxlenght:"5" placeholder="Ex: 5 "/>
				<br> <br>
		<label class="angulo">Insira um valor para o ângulo interno A: </label>
			<input type="text" name="a" id="a" size="5" maxlenght:"4" placeholder="Ex: 30"/>
				<br>
		<labe class="angulo"l>Insira um valor para o ângulo interno B: </label>
			<input type="text" name="b" id="b" size="5"  maxlenght:"4" placeholder="Ex: 60"/>
				<br>
		<label class="angulo">Insira um valor para o ângulo interno C: </label>
			<input type="text" name="c" id="c" size="5"  maxlenght:"4" placeholder="Ex: 90"/>
				<br>
			<input  class="botao"type="submit" name="enviar" value="enviar"/>
	</form>	
            
        
<?php
	if(isset($_POST['enviar'])) {

	$AB = $_POST['AB'];
	$AC = $_POST['AC'];
	$BC = $_POST['BC'];
	$clados = "";

	if ( $AB == $AC && $BC == $AC && $AB == $BC) {
			$clados = "triângulo equilatero ";
				
	}elseif (($AB == $AC && $BC != $AC && $BC != $AB) || ($AC == $BC && $AB != $BC && $AB != $AC) 
		|| ($AB == $BC && $AC != $AB && $AC != $BC)) {
			$clados = "triângulo isóceles ";
	
	}elseif ($AB != $AC && $BC != $AC && $AB != $BC) {
			$clados = "triângulo escaleno ";
	}
	

	$a = $_POST['a'];
	$b = $_POST['b'];
 	$c = $_POST['c'];
	$angul = "";

	if ($a < 90 && $b < 90 && $c <90) {
			$angul = "de ângulo acutângulo.";

	}elseif (( $a > 90) || ($b > 90) || ($c > 90)) {
			$angul = " de ângulo obtusângulo.";

	}elseif (($a == 90) || ($b == 90) || ($c == 90)) {
			$angul = " de ângulo retângulo.";
	}
	
	} 
	echo "<h2>";
	echo "Este é um " . $clados . $angul;
	echo "</h2>";
?>
</body>
</html>