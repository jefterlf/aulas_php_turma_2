<html>
<body>
<?php
	
	$num = 5000;
	function testa_escopo1 ()
	{
		echo $GLOBALS["num"] . "<br>";
		$GLOBALS["num"]++;

	}

	testa_escopo1();
	echo $num;

?>
</body>
</html>