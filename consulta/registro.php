<?php

session_start();

$usuario = $_SESSION['username'];

if(isset($usuario)){
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<style>
	    body {
    zoom: 2.5;

}
input{
    border-radius: 5px;
}
	</style>
	
</head>
<body>
    <center>
        <h1>REGISTRO</h1>
        <FORM ACTION="next.php" method="POST"> 
    
    <form class="form_reg" action="">
      <div id="dos" > <form action="registro.php" method="post">
    
		<label for="usuario">Usuario</label><br>

		<input type="text" name="usuario" id="usuario" placeholder="Ingrese al nuevo admin" required>
		<br>
		<br>
		<label for="contra">Contraseña</label><br>
		<input type="password" name="contra" id="contra" placeholder="Contraseña" required>
		<br>
		<br>
		<button type="submit" name="registrarse">Enviar</button>
	</form>
	</center>
</body>
</html>
<?php
}
else{
	header("location: index.php");
}
?>