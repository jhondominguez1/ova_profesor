<html>
	<head>
		<title>
			TABLA DE MULTIPLICAR
		</title>
	<CENTER><b>TABLA DE MULTIPLICAR</b>
	<br>
	<br>
	<br>
	</head>
	<body bgcolor="#A9BCF5" style="margin:200px">
	<table border=2>
<?php
$a=$_POST['a'];

$multiplicando=$a;
$multiplicador=1;
while ($multiplicador <= 10) {
	echo "<tr><td>$multiplicando</td><td> * </td><td>$multiplicador</td><td> =</td> <td>".($multiplicando * $multiplicador)."</td></tr>" ;
$multiplicador++;
}
?>
</table>

		</body>
		<br>
		<hr>
		<br>
		Realizado por:<br>Viviana Burbano - Camilo Ortega -	Andrea España.
</html>
