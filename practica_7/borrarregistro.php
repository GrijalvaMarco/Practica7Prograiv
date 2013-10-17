<!DOCTYPE html>

<?php
//include ("validar.php");
?>
<html>
<head>
	<title></title>

</head>
<body>

<?php

include ("conexion.php");
$id = $_GET['id'];
$query = ("DELETE FROM datos WHERE id = '$id';");
  $result = mysql_query($query);
  
  echo "<h1>REGISTRO $Nombre ELIMINADO CON EXITO!</h1>";
  
  echo '<a href="index.php">IR A INICIO</a>';
  
  ?>
  
 </body>
 </html>