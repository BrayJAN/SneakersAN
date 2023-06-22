<?php
if (isset($_REQUEST['crear'])) {
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
        $prd1 = $_REQUEST["prd1"];
        $prd2 = $_REQUEST["prd2"];
        $prd3 = $_REQUEST["prd3"];
        $user = $_REQUEST['usern'];
        $cantidad = $_REQUEST["cantidad"];

        include("sendemail2.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
        
        /*Configuracion de variables para enviar el correo*/
        $mail_username="sneakersAN.noreply@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
        $mail_userpassword="SneakersAn";//Tu contraseña de gmail
        $mail_addAddress=$correo;//correo electronico que recibira el mensaje
        $template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
        
        /*Inicio captura de datos enviados por $_POST para enviar el correo */
        $mail_setFromEmail=$correo;
        $mail_setFromName="SneakersAN";
        $txt_message="¡Visítanos! ¿Qué esperas?";
        $mail_subject="Usuario nuevo";
        
        sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);
      header("Location: http://localhost/web/Portales/next.php?cant=".$cantidad."&prd1=".$prd1."&prd2=".$prd2."&prd3=".$prd3."&ver=1024&user=".$user);

    }
    else{
      echo "Los datos no son correctos, regrese a la página anterior.";
    }
  }
?>
<?php
    if (isset($_REQUEST['iniciar']) ) {
     



     include('conexion.php'); 

        $correo = $_REQUEST['correo'];
        $user = $_REQUEST['user'];
        $contra = $_REQUEST['pass'];
        $cantidad = $_REQUEST["cantidad"];

        $query = mysqli_query($cn, "SELECT correo_usu, usuario_usu FROM usuarios WHERE correo_usu='$correo' AND usuario_usu='$user';");
        $nr = mysqli_num_rows($query);
        
       if ($nr == 1) {
        $result = $cn->query("SELECT contraseña_usu FROM usuarios WHERE correo_usu='$correo';");

        while($row = $result->fetch_object()) { 
          $hash = $row->contraseña_usu;
        }
        if(password_verify($contra, $hash)){
          $prd1 = $_REQUEST["prd1"];
          $prd2 = $_REQUEST["prd2"];
          $prd3 = $_REQUEST["prd3"];
          $user = $_REQUEST['user'];
          $cantidad = $_REQUEST["cantidad"];
          header("Location: http://localhost/web/Portales/next.php?cant=".$cantidad."&prd1=".$prd1."&prd2=".$prd2."&prd3=".$prd3."&ver=1024&user=".$user);
        }
        else{
          echo "Los datos no son correctos, regrese a la página anterior.";
        }
        }
        else if ($nr == 0) {
          echo "Los datos no son correctos, regrese a la página anterior.";
        }

}
?>