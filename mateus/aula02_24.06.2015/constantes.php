<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>AULA 02 25.06.2015 PART3</title>
	</head>
	<body>
		<?php
			define ("meunome","Juliano");
			define ("peso", 78);

			$texto1 = "Este é o texto1";
			echo "$texto1";
			echo "</br>";
			$texto1 = "Este é o texto2";
			echo "$texto1";

			echo "</br>";

			echo "O meu nome é " . meunome;
			echo "</br>";
			echo "O meu peso é " . peso . " quilos";
		?>
	</body>
</html>