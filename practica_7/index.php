<!DOCTYPE html>
<?php

include ("validar.php");

?>
<html>
<head>
	<title>Sesi&oacute;n</title>

</head>
<body>
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>ID</b></font></td>
<td><font face="verdana"><b>NOMBRE</b></font></td>
<td><font face="verdana"><b>TELEFONO</b></font></td>
<td><font face="verdana"><b>OPCIONES</b></font></td>
</tr>
<?php

  include ("conexion.php");
  $query ="SELECT d.id, d.nombre, d.telefono " .
      "FROM datos d";
  $result = mysql_query($query);
  $numero = 0;
  $row;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["id"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["telefono"] . "</font></td>";	
	
     echo "<td width=\"25%\"><font face=\"verdana\">";
	echo   ' <a href="borrarregistro.php?id='.$row["id"].'">BORRARREGISTRO</a>'; 
	echo  ' <a href="nuevo.php">MODIFICARREGISTRO</a>'."</font></td>";
	  
	  
    $numero++;
  }
  
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero registros: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table>

<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>OPCIONES</b></font></td>
</tr>
 <tr><td width=\"25%\"><font face=\"verdana\">    
  <a href="borrartodos.php">ELIMINAR TODOS LOS REGISTROS</a></font></td>

<form method="post" action="nuevo.php">
	<input type="submit" id="inputnew" name="btnnuevo" value="Nuevo Registro" size="250">
</form>


<br><br><p> <a href="cerrarsesion.php?">Cerrar sesion</a></p>


</body>
</html>