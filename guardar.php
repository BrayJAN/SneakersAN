<?php
	include('conexion.php'); 
		$nombre = $_REQUEST['nombre'];
        $correo = $_REQUEST['correo'];
        $user = $_REQUEST['usern'];
        $psd = $_REQUEST['passn'];
        $contra = password_hash($psd, PASSWORD_BCRYPT); 
        
        $direccion = $_REQUEST['direccion'];
        $cp = $_REQUEST['cp'];
        $ciudad = $_REQUEST['ciudad'];
        $pais = $_REQUEST['pais'];
        $telefono = $_REQUEST['telefono'];

    $guardar = "INSERT INTO usuarios (id_usu, nombre_usu, correo_usu, usuario_usu, contraseña_usu, direccion_usu, cp_usu, ciudad_usu, pais_usu, telefono_usu)
    	VALUES (null, '$nombre', '$correo', '$user', '$contra', '$direccion', $cp,
    	'$ciudad', '$pais', $telefono);";

		if($cn->query($guardar)){
			echo "alamcenado";
		}
?>