<?php
$n=_POST['numero'];
while($n<=10){
	echo"<table border=1 align=center><tr><td>Tabla de multiplicar del ".$n."</td></tr>";
	$n2=1;
	while($n2<=10){
		$mult=$n1*$n2;
		echo "<tr align=center><td>".$n1."</td><td> X </td><td>".$n2."</td><td> = </td>";
		echo"<td>".$mult."</td></tr>";
		$n2++;
		
	}
echo "</table>";
	
	
}

?>
