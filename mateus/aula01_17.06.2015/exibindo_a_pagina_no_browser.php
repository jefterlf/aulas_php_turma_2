<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
	$dia = date("d/m/Y",time());
	$base = 5.5;
	$altura = 10;
	$area = $base * $altura;
	?>
	<p align="center">Data: <?php echo $dia; ?></p>
	<p align="center">Altura: <?php echo $altura; ?></p>
	<p align="center">Base: <?php echo $base ?></p>
	<p align="center">A áera é <?php echo $area; ?>.</p>
</body>
</html>
