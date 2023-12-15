<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	//Variables
	$edad = 39;
	$estatura = 1.67;
	$nombre = "Luis Javier";
	$frase = "Luisja tiene $edad años";
	$profesor = false;

	echo $edad; 
	echo "<br>";
	echo $estatura;
	echo "<br>";
	echo "Tu nombre es " . $nombre;
	echo json_encode ($profesor);

	//$6edad = "hola"; esta hecho mal a drede


?>
</body>
</html>