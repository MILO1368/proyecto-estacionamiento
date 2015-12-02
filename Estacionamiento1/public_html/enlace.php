<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body bgcolor="white">
<?php

include('conexion.php');

$sql="select * from plazas where costos  ";
$resultado = mysql_query($sql) or die('La consulta fall&oacute;: ' . mysql_error());
 
?>

<br>
<br>
<center><table border=1 bgcolor=white>

<tr><td bgcolor=black><font color=white>nombre_plazas</font></td><td bgcolor=black><font color=white>tiempo</td><td bgcolor=black><font color=white>costo</td></tr>
<?php

while ($myrow = mysql_fetch_row($resultado)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow[0],$myrow[1],$myrow[2],$myrow[3],$myrow[4],$myrow[5],$myrow[6],$myrow[7],$myrows[8]);
}
?>
</table>
</body>
 </html>