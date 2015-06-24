<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
		$data_de_hoje = date("d/m/Y",time()); 
		//A função time retorna a data atual. 
		//A função date é para formatar o time, assim você pode escolher quais informações quer 'retirar' e vê-las.
		//Com áspas duplas eu posso imprimir variáveis php, mas com áspas simples não! Só texto.
	?>
	<p align="center">Na data de <?php echo $data_de_hoje; ?> eu gostaria de ganhar uma caixa de bombom.</p>
</body>
</html>
