<html>

<br><br>
<center>
<table width="80%">
<td bgcolor="WHITE"><font color="BLACK" size="30"><marquee> EL COSTO DEL ESTACIONAMIENTO SELECCIONADO ES: <marquee></font></td>
</table><br>
<FORM>
</TABLE>
<table width="50%">
<tr>
<td align="right">
<table width="98%" align="center">
<tr>
<td width="55%">&nbsp;</td>
<td align="left"></td>
</tr>
</table>
</td>
 
</form>
</table>
</center>

<?php
// Conexion, seleccion de base de datos



$nom=$_POST['estacionamiento'];
$time=$_POST['tarifa'];

include ("conexion.php");
    
mysql_select_db('Estacionamiento') or die('No pudo seleccionarse la BD.');

$Query="SELECT * FROM plazas where tiempo='$time' and nombre_plazas='$nom'";

$resultado = mysql_query($Query) or die('La consulta fall&oacute;: ' . mysql_error());
?>
<center>
<table border=1 bgcolor=white>

<tr><td bgcolor=black><font color=white>nombre_plaza</font></td><td bgcolor=black><font color=white>tiempo</font></td><td bgcolor=black><font color=white>tarifa</font></td></tr>

<?php

while ($row= mysql_fetch_array($resultado)) {
printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $row['nombre_plazas'],$row['tiempo'],$row['costo']);
//echo $row['nombre_plazas'];
//echo $row['tiempo'];
//echo $row['costo'];
}
?>

</center>

</table>
<h1>Con Boleto Sellado el Costo por Hora es De:$5 pesos<h1> 
<center> <form action="Index.html">
	
<input type="submit" value="Regresar al Menu"> </form> </center><br><br>
</body>    
</html>
