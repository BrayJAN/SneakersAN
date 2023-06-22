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
	<title>Usuarios</title>
</head>
<body>
	<br>
<H1><CENTER>Usuarios</H1>
<?php
	include("Conexiocn.php");
	
	$result = $link->query("select * from usuarios");
?>

<div id="main-container">
	<TABLE >
		<thead><TR><TD>ID</TD><TD>Nombre</TD><TD>Correo</TD><TD>Usuario</TD><TD>Direccion</TD><TD>CP</TD><TD>Ciudad</TD><TD>Pais</TD><TD>Telefono</TD><TD>Tarjeta</TD> </TR></thead>
<?php		

	while($row = $result->fetch_object()) {   /* Además de guardar los datos en el indice numerico de la matriz, guarda también los datos en los indices asociativos, usando el nombre de campo como clave. */

echo "<Tr>";
 echo "<Td>" . $row->id_usu;
       echo "<Td>" . $row->nombre_usu;
       echo "<Td>" . $row->correo_usu;
       echo "<Td>" . $row->usuario_usu;
        echo "<Td>" . $row->direccion_usu;
         echo "<Td>" . $row->cp_usu;
          echo "<Td>" . $row->ciudad_usu;
           echo "<Td>" . $row->	pais_usu;
            echo "<Td>" . $row->telefono_usu;
             echo "<Td>" . $row->tarjetacred_usu;


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