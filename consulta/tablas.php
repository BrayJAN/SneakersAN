<?php

session_start();

$usuario = $_SESSION['username'];

if(isset($usuario)){
echo "<h1>BIENVENIDO, <b style='color: white;'>$usuario</b></h1>";


    ?>


<!DOCTYPE html>
<html>
<head>
<style>

h1{
	background-color: lightgray;
	background-size: 30;
	text-align: center; 
	text-shadow: 1px 1px 2px black; 
	font-family: "Segoe UI";
	font-size: 50px;
	border: 5px solid black;
}
#main-container{

	margin: 5px auto;
	font-family: Roboto, Arial, sans-serif;
}

table{

	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 50%;
	border: 5px solid black;

}

th, td{
	border:solid 1px black;
	padding: 20;
	text-align: center;

}

thead{
	background-color: black;
	border-bottom: solid 5px #E74B00;
	color: white;
}
</style>
	<title>Administrador</title>
</head>
<body>
	<center>
		<div id="main-container">
         <table >
         	<tr><td></br><a href ="usuarios.php"><img src="usuario.png"
              	width="100" height="100"></img></a></br></td></tr>
              <tr><br><td width="50"><a href ="Compra.php"><img src="carrito.png"
              	width="100" height="100"></img></a> </br></td></tr>
              <tr><td></br><a href ="Productos.php"><img src="caja.png" width="100" height="100"></img></a></br></td></tr>

              
              
              
         </table>
         </center>
         <p align="right" style="color: white; font-size: 32px;"><a href="registro1.php" style=" text-decoration:none; cursor: pointer; color: red;  color: #636363;">Agregar usuario</a></p>
        <p align="right" style="color: white; font-size: 32px;"><a href="salir.php" style=" text-decoration:none; cursor: pointer; color: #636363;">Salir</a></p>

</body>
</html>
<?php
}
else{
	header("location: index.php");
}
?>

   