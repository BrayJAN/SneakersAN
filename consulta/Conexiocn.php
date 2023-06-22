<html> 
<head> 
<title>conexión</title> 
</head> 
<body> 
<?php 
//#coneccion con el MDB en MySql 
$Host ="LocalHost";
$usuario ="root";
$contra="";
$bd="sneakersan";

$link = new mysqli($Host,$usuario,$contra, $bd) or die ("no se ha podido conectar"); 

$link->set_charset("utf8");


 
?> 

</body> 
</html>
