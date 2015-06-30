<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>manipulando os dados em php</title>
	</head>
	<body>
            <?php
                $num = 5000;
                function testa_escopo1 ()
                {
                    $num = 5;
                    echo $num . "</br>";
                }
                echo $num . "</br>";
                testa_escopo1();
            ?>
	</body>
</html>