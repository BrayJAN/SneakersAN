<!DOCTYPE html>

<html>
<style>

	h1{
		font-size: 30px;
    width: 150px;
    color: white;
		background-color: #0e0105;
    border-radius: 3px;

	}
	input[type=text], select {

  border: 1px solid black;
  width: 50%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
 
  border-radius: 7px;
  box-sizing: border-box;
}
input[type=password], select {

  border: 1px solid black;
  width: 50%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
 
  border-radius: 7px;
  box-sizing: border-box;
}

	input[type=submit] {
  width: 50%;
  background-color: #0e0105;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 70px;
  cursor: pointer;
}
	input[type=submit]:hover {
  background-color: #494949;
}

</style>

<head>

	<meta charset="utf-8">

	<title>Administradores</title>

	<style>

	    body {
zoom: 1.5;

}

	</style>

</head>

<body>


    <center>

        <h1>Ingresar</h1>

	<form action="log.php" method="POST">

		<input type="text" name="usuario" placeholder="Usuario" required>

		<br>

		<br>

		<input type="password" name="contra" placeholder="Contraseña" required>

		<br>

		<br>

		<input  type="submit"></input>

	</form>

	

	</center>


<?Php




?>
</body>
</html>