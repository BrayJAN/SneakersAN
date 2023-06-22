<?php

require 'Conexiocn.php';

session_start();

$usuario = $_POST['usuario'];
$pass = $_POST['contra'];

$res = $link->query("SELECT * FROM admins WHERE user_admin='$usuario';");

if (mysqli_num_rows($res)>0) {
	$result = $link->query("SELECT contra_admin FROM admins WHERE user_admin='$usuario';");

while($row = $result->fetch_object()) { 
	$hash = $row->contra_admin;
	}

if(password_verify($pass, $hash)){
	$_SESSION['username'] = $usuario;
    header("location: tablas.php");
}
	else{
	echo "DATOS INCORRECTOS";
	}
}

else{
	echo "DATOS INCORRECTOS";
	}

?>