 <?php

 include("Conexiocn.php"); 
 
if(isset($_POST['registrarse'])){
    
   $usuario = $_POST['usuario']; 
   $psd = $_POST['contra'];
   
   $contra = password_hash($psd, PASSWORD_BCRYPT); 

   $insertar = "insert into admins (user_admin,contra_admin) values ('$usuario', '$contra')";


if ($link->query($insertar))
            {
             echo "<center><P><H1>La Alta se ha realizado con exito para: $usuario<center></P>";
             $titulo=":::IR A MENU PRICIPAL:::";
             echo "<a href ='index.php'>$titulo</a>";
            }
          else
            {
               echo "<P>Se ha producido un error para $usuario</P>";
            }
        }
?>