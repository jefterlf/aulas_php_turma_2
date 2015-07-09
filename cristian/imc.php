<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
</head>
	<meta charset="UTF-8">
<body>

	<form action="imc.php" type="text" method="post">

			<label>Nome</label><br>
			<input type="text" name="nome" id="nome" placeholder="Nome"><br>
			<label>Peso</label><br>
			<input type="text" name="peso" id="peso" placeholder="Peso"><br>
			<label>Altura</label><br>
			<input type="text" name="altura" id="altura" placeholder="Altura"><br>
			<input type="submit" name="enviar"><br>

	</form>




	<?php

		if (isset($_POST["enviar"])) {
		
			$name = $_POST["nome"];
			$peso = $_POST["peso"];
			$alt = $_POST["altura"];
			$imc = round($peso / ($alt * $alt));
			$res = "";
		
		



			if ($imc < 20) {
				$res = "abaixo do peso";
			}
			elseif ($imc >= 20 && $imc <= 25) {
				$res = "normal";
			}
			elseif ($imc > 25 && $imc <= 30) {
				$res = "acima do peso";
			}
			elseif ($imc > 30 && $imc <= 35) {
				$res = "obesidade";
			}
			elseif ($imc > 35) {
				$res = "obesidade morbida";
			}

			echo "<h3 align='center'>$name</h3><br>";
			echo "<h3 align='center'>$imc</h3><br>";
			echo "<h3 align='center'>$res</h3><br>";
}
	?>	

</body>
</html>