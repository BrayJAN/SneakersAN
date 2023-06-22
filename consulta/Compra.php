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
	<title>Compras</title>
</head>
<body>
	<br>
<H1><CENTER>Compras</H1>
<?php
	include("Conexiocn.php");
	
	$result = $link->query("select * from compra");
?>

<div id="main-container">
	<TABLE >
		<thead><TR><TD> Compra</TD><TD>Usuarios</TD><TD>Productos</TD><TD>Paqueteria </TD><TD>Entrega</TD><TD>Numero Rastreo</TD><TD>Numero Pedido</TD><TD>Pago</TD><TD>Subtotal</TD><TD>Descuento</TD><TD>IVA</TD><TD>Total</TD> </TR></thead>
<?php		

	while($row = $result->fetch_object()) {   /* Además de guardar los datos en el indice numerico de la matriz, guarda también los datos en los indices asociativos, usando el nombre de campo como clave. */

echo "<Tr>";
 echo "<Td>" . $row->id_compra;
       echo "<Td>" . $row->id_usu_usuarios;
       echo "<Td>" . $row->id_prod_productos;
       echo "<Td>" . $row->paqueteria_compra;
       echo "<Td>" . $row->entrega_compra;
       echo "<Td>" . $row->	nro_rastreo_compra;
       echo "<Td>" . $row->nro_pedido_compra;
       echo "<Td>" . $row->pago_compra;
       echo "<Td>" . $row->subtotal_compra;
       echo "<Td>" . $row->desc_compra;
       echo "<Td>" . $row->iva_compra;
       echo "<Td>" . $row->total_compra;

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