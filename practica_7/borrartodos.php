<!DOCTYPE html>

<?php
include ("validar.php");
?>
<html>
<head>
	<title></title>

</head>
<body>

<?php

include ("conexion.php");

$query = ("DELETE FROM datos;");
  $result = mysql_query($query);
  
  echo "<h1>REGISTROS ELIMINADOS CON EXITO!</h1>";
  
  echo '<a href="index.php">IR A INICIO</a>';
  
  ?>
  
 </body>
 </html>