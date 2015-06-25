<!DOCTYPE html>
<html>
<body>
<?php
	$data_de_hoje = date("Y/m/d",time()); echo "<br>". time();
	//time retorna a data atual do servidor
	//date 
?>

	<p align="center">gostaria <?php echo $data_de_hoje  ?> _de_comer_uma_pizza; </p>
</body>
</html>