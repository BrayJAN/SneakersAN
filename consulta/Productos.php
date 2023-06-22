<?php
	session_start();

	$usuario = $_SESSION['username'];

	if(isset($usuario)){
?>
<html>
<style>
	
h1{
	font-size: 35px;
	font-family: Roboto, Arial, sans-serif;
}  
#main-container{

	margin: 60px auto;
	font-family: Roboto, Arial, sans-serif;
}

TABLE{

	background-color: #F5EB50;
	text-align: left;
	border-collapse: collapse;
	width: 100%;

}

th, td{
	border:solid 1px black;
	padding: 20;
}

thead{
	background-color: black;
	border-bottom: solid 5px #E74B00;
	color: white;
}


</style>
<head>
	<br>
	<title>Productos</title>
</head>
<body>
<H1><CENTER>Productos</H1>
<?php
	include("Conexiocn.php");
	
	$result = $link->query("select * from productos");
?>

<div id="main-container">
	<TABLE >
		<thead><TR><TD> ID</TD><TD>Nombre</TD><TD>Numero estrellas</TD><TD>Talla</TD><TD>Precio</TD></TR></thead>
<?php		

	while($row = $result->fetch_object()) {   /* Además de guardar los datos en el indice numerico de la matriz, guarda también los datos en los indices asociativos, usando el nombre de campo como clave. */

echo "<Tr>";
 echo "<Td>" . $row->id_prod;
       echo "<Td>" . $row->nombre_prod;
       echo "<Td>" . $row->nestrellas_prod;
       echo "<Td>" . $row->talla_prod;
       echo "<Td>" . $row->precio_prod;

             echo "<Tr>";
		
	}


	mysqli_free_result($result);  /* mysql_free_result se usa para liberar la memoria empleada al realizar una consulta */

?>
</TABLE></div>
</table>
</body>
</html>
<?php
}
else{
	header("location: index.php");
}
?>