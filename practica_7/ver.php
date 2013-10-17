<?php

include ("validar.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>ver</title>
</head>
<body>
<fieldset>
<legend>DATOS</legend>
<?php
$Nombre = $_POST['nombre'];
$Telefono = $_POST['telefono'];
$Celular = $_POST['cel'];
$Domicilio = $_POST['domicilio'];

echo "<h2>NOMBRE:</h2> <label>".$Nombre."</label>";
echo "<h2>TEL&Eacute;FONO:</h2> <label>".$Telefono."</label>";
echo "<h2>CELULAR:</h2> <label>".$Celular."</label>";
echo "<h2>DOMICILIO:</h2> <label>".$Domicilio."</label>";

 include("conexion.php");

 $query = ("INSERT INTO datos(id,nombre,telefono,celular,direccion,colonia,cp) VALUES('','$Nombre','$Telefono','$Celular','$Domicilio','nulo','nulo');"); 
  $result = mysql_query($query);
   echo "<br><h1>¡Gracias! Hemos recibido sus datos.\</h1>"; 
  //mysql_free_result($result);
  //mysql_close ("localhost", "root","");


?>

<br/>
<br/>
<p> <a href="cerrarsesion.php?">Cerrar sesion</a></p>
	
<a href="index.php">IR A INICIO</a>
</fieldset>
</body>
</html>