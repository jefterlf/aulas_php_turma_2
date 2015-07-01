<html>
<body>
<?php
	$a = 1;
	$b = 3;
	$c = 5;
	$res1 = ++$b - $a;
	$res2 = $c-- + $a;
	$res3 = --$a + $c++;
	echo "a = $a<br> b =$b<br> c = $c<br><br>";	
	echo "res1 = $res1<br> res2 = $res2<br> res3 = $res3<br>";
?>
</body>
</html>  