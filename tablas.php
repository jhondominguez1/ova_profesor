<table border=1>
<?php
$a=$_POST['num'];
$b=$a+3;
$i=1;
while ($a<$b) {
while ($i<11) {
    echo "<tr><td>$a x $i =".$a*$i . "</td>";
	$i++;
	}
$a++;
$i=1;
}
?>
</tr>
</table>