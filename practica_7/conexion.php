<!DOCTYPE html>
<html>
<head>
	<title>Conexion</title>

</head>
<body>
<?php  
  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("registro", $link)
      or die ("Error al conectar a la base de datos.");
?>

</body>
</html>