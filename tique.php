<?php 
    if (isset($_REQUEST['cancelar'])) {
        header("Location: index.html");
    }
        include('conexion.php'); 
        $user = $_REQUEST['usern'];
        $tc = $_REQUEST['cuenta'];
        mysqli_query($cn, "UPDATE usuarios SET tarjetacred_usu=$tc WHERE usuario_usu='$user';");

        /*BD*/
        $query = $cn->query("SELECT id_usu, nombre_usu, correo_usu, direccion_usu, cp_usu, ciudad_usu, pais_usu, telefono_usu FROM usuarios WHERE usuario_usu='$user';");

        while ($fila = $query->fetch_object()) {
                $idus = $fila->id_usu;
                $nombre = $fila->nombre_usu;
                $correo = $fila->correo_usu;
                $direccion = $fila->direccion_usu;
                $cp = $fila->cp_usu;
                $ciudad = $fila->ciudad_usu;
                $pais = $fila->pais_usu;
                $telefono = $fila->telefono_usu;
                }
                mysqli_free_result($query);
        
        

        $cantidad = $_REQUEST["cantidad"];
        $prd1 = $_REQUEST["prd1"];
        $prd2 = $_REQUEST["prd2"];
        $prd3 = $_REQUEST["prd3"];

        $cant = $prd1+$prd2+$prd3;

        $radio = $_REQUEST['tipop'];

        $nprod = "";

        
        if ($prd1 > 0) {
            $nprod .= "|Air Yeezy 2| ";
            $cn->query("INSERT INTO compra (id_compra, id_usu_usuarios, id_prod_productos) VALUES (null, $idus, 1);");
            
        }
        if ($prd3 > 0) {
            $nprod .= "|Nike Dunk Low| ";
            $cn->query("INSERT INTO compra (id_compra, id_usu_usuarios, id_prod_productos) VALUES (null, $idus, 2);");
            
        }
        if ($prd2 > 0) {
            $nprod .= "|Air Mag| ";
            $cn->query("INSERT INTO compra (id_compra, id_usu_usuarios, id_prod_productos) VALUES (null, $idus, 3);");
            
        }
        
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compra</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


    <link rel="icon" type="image/png" href="img/zapatos.png">

    <style type="text/css">
    .modalDialog {
    overflow-y: scroll;
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
    }
    .modalDialog:target {
        opacity:1;
        pointer-events: auto;
    }
    .modalDialog > div {
        width: 800px;
        position: relative;
        margin: 5% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
    
    }
    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    .close:hover {
        background: #00d9ff;
    }

    .btn-borde {
        font-family: 'Roboto',sans-serif;
        font-size: 24px;
        width: 210px;
        height: 60px;
        border-radius: 3px;
        border: none;
        color: #fff;
        background-color: #d10000;
        transition: color .15s ease-in-out,
        background-color .15s ease-in-out;
        margin-left: 1080px;
}

    .btn-borde:hover, .btn-borde:active, .btn-borde:focus {
        color: white;
        background-color: #a01111;
    }
 


</style>
</head>
<body>
  <script>
    Imprimir(){
      window.open('http://localhost/Portales/tiqueCompra.php', '_blank');
    }
  </script>
	<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>Términos y condiciones de uso</h2>
        <p>1.  Derechos de Propiedad.<br> Entre usted y Sneakers AN., Sneaker AN. es dueno único y exclusivo, de todos los derechos, título e intereses en y del Sitio Web, de todo el contenido (incluyendo, por ejemplo, audio, fotografías, ilustraciones, gráficos, otros medios visuales, videos, copias, textos, software, títulos, archivos de Onda de choque, etc.), códigos, datos y materiales del mismo, el aspecto y el ambiente, el diseño y la organización del Sitio Web y la compilación de los contenidos, códigos, datos y los materiales en el Sitio Web, incluyendo pero no limitado a, cualesquiera derechos de autor, derechos de marca, derechos de patente, derechos de base de datos, derechos morales, derechos sui generis y otras propiedades intelectuales y derechos patrimoniales del mismo.</p>


<p>2.Licencia Limitada.<br> Usted puede acceder y ver el contenido del Sitio Web desde su computadora o desde cualquier otro aparato y, a menos de que se indique de otra manera en estos Términos y Condiciones o en el Sitio Web, sacar copias o impresiones individuales del contenido del Sitio Web para su uso personal, interno únicamente. El uso del Sitio Web y de los servicios que se ofrecen en o a través del Sitio Web, son sólo para su uso personal, no comercial.
    
</p>
<p>3.         Uso Prohibido.<br> Cualquier distribución, publicación o explotación comercial o promocional del Sitio Web, o de cualquiera de los contenidos, códigos, datos o materiales en el Sitio Web, está estrictamente prohibida, a menos de que usted haya recibido el previo permiso expreso por escrito del personal autorizado de Time Inc. o de algún otro poseedor de derechos aplicable. A no ser como está expresamente permitido en el presente contrato, usted no puede descargar, informar, exponer, publicar, copiar, reproducir, distribuir, transmitir, modificar, ejecutar, difundir, transferir, crear trabajos derivados de, vender o de cualquier otra manera explotar cualquiera de los contenidos, códigos, datos o materiales en o disponibles a través del Sitio Web. 
    


</p>

<p>
    4.         Marcas Comerciales.<br> Las marcas comerciales, logos, marcas de servicios, marcas registradas (conjuntamente las "Marcas Comerciales") expuestas en el Sitio Web o en los contenidos disponibles a través del Sitio Web son Marcas Comerciales de Time Inc. registradas y no registradas y otras, y no pueden ser usadas con respecto a productos y/o servicios que no estén relacionados, asociados o patrocinados por sus poseedores de derechos y que puedan causar confusión a los clientes, o de alguna manera que denigre o desacredite a sus poseedores de derechos. Todas las Marcas Comerciales que no sean de Time Inc. que aparezcan en el sitio Web o en o a través de los servicios del Sitio Web, si las hubiera, son propiedad de sus respectivos dueños.
</p>
<p>
    5.         Información del Usuario<br>En el curso del uso que usted haga del Sitio Web y/o de los servicios puestos a su disposición en o a través del Sitio Web, se le puede pedir que nos proporcione cierta información personalizada (dicha información en lo sucesivo "Información del Usuario"). Las políticas de uso y recopilación de información de Time Inc. con respecto a la privacidad de dicha Información del Usuario se establecen en la Política de Privacidad del Sitio Web, la cual está incorporada al mismo como referencia para todos los propósitos. Usted reconoce y acepta ser el único responsable de la exactitud del contenido de la Información del Usuario.

</p>
    </div>
</div>


<header>
<section class="header-top" style="background-color: white;">
  <div>
    <img src="img/TENIS5.png" style="position: absolute; top: 0px; left: 180px; width: 100px;">
  </div>
</section>
<div class="clear"></div>
<section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="index.html" style="position: relative; bottom: 10px; right: 60px;"><img src="img/logo.png"></a>
                   </div>
                </div>
                <div class="col-md-7" style="width: 900px;">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.html">Inicio</a></li>
                      <li><a href="productos.html">Tienda</a></li>
                      <li><a href="#"  style="color: red; font-weight: 5px;">CARRITO DE COMPRAS</a></li>
                      <li><a href="#openModal">Términos y condiciones de uso</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
</header>
 <section class="our_skill">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                  <section>
                            <div style="font-family: 'Roboto',sans-serif; font-size: 20px; border: 1.5px solid black; padding: 25px 25px 25px 25px; margin: 2% 10% 10% 10%;">
                                <p align="center" style="font-size: 48px; color: #d10000;"><b>Datos de envío</b></p>
                                <p>Nombre: <b><?php echo $nombre; ?></b></p>
                                <p>Correo: <b><?php echo $correo; ?></b></p>
                                <p>Dirección: <b><?php echo $direccion; ?></b></p>
                                <p>Código Postal: <b><?php echo $cp; ?></b></p>
                                <p>Ciudad: <b><?php echo $ciudad; ?></b></p>
                                <p>País: <b><?php echo $pais; ?></b></p>
                                <p>Teléfono: <b><?php echo $telefono; ?></b></p>
                                <br>
                                <p align="center" style="font-size: 48px; color: #d10000;"><b>Cobro</b></p>
                                <p>Subtotal: <b>$<?php echo number_format($cantidad); ?></b></p>
                                <p>Cantidad: <b><?php echo $cant; ?></b></p>
                                <?php
                                  switch ($radio) {
                                    case '1':
                                        $total = 0.90*$cantidad;
                                        $desc = $total;
                                        $tp = "De contado";
                                      break;
                                    
                                    case '2':
                                        $total = $cantidad;
                                        $pormes = (($total*0.16)+$total)/3;
                                        $tp = "Por tres meses";
                                      break;
                                    
                                    case '3':
                                        $total = $cantidad;
                                        $pormes = (($total*0.16)+$total)/6;
                                        $tp = "Por seis meses";
                                      break;
                                  }

                                  $ivan = $total*0.16;
                                  $iva = $ivan+$total;
                                ?>
                                <p>Tipo de pago: <b><?php echo $tp; ?></b></p>
                                <?php
                                  if ($radio == 1) {
                                    ?>
                                <p>Descuento (10 % aplic.): <b>$<?php echo number_format($desc); ?></b></p> 
                                <p>IVA (16 %): <b>$<?php echo number_format($ivan,2); ?></b></p> 
                                <p>Total: <b>$<?php echo number_format($iva,2); ?></b></p>
                                    <?php
                                  }
                                  else{
                                ?>
                                  <p>IVA (16 %): <b>$<?php echo number_format($ivan, 2); ?></b></p>
                                  <p>Total: <b>$<?php echo number_format($iva, 2); ?></b></p>
                                  <p>Pago por mes: <b>$<?php echo number_format($pormes, 2); ?></b></p>
                                <?php
                                  }
                                ?>  
                                <form action="pdf/tiqueCompra.php" method="POST">

                                <input type="hidden" name="nprod" value="<?php echo $nprod; ?>">

                                <input type="hidden" name="subtotal" value="<?php echo $cantidad; ?>">
                                <input type="hidden" name="cant" value="<?php echo $cant; ?>">
                                <input type="hidden" name="tp" value="<?php echo $tp; ?>">
                                <input type="hidden" name="desc" value="<?php echo $desc; ?>">
                                <input type="hidden" name="pagomes" value="<?php echo $pormes; ?>">
                                <input type="hidden" name="iva" value="<?php echo $ivan; ?>">
                                <input type="hidden" name="total" value="<?php echo $iva; ?>">

                                <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                                <input type="hidden" name="correo" value="<?php echo $correo; ?>">
                                <input type="hidden" name="direccion" value="<?php echo $direccion; ?>">
                                <input type="hidden" name="cp" value="<?php echo $cp; ?>">
                                <input type="hidden" name="ciudad" value="<?php echo $ciudad; ?>">
                                <input type="hidden" name="pais" value="<?php echo $pais; ?>">
                                <input type="hidden" name="telefono" value="<?php echo $telefono; ?>">
                                <input type="hidden" name="ultid" value="<?php echo $ultid; ?>">

                                <button type="submit" name="cancelar" class="btn-borde" style="margin: 5% auto;">Imprimir</button>
                                <button name="enviar" class="btn-borde" style="margin-left: 10px">Finalizar</button>
                                </form>
                    </div>
                </div>
                  </section>
            

<br><br><br>
<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>INFORMACIÓN</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Facebook</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Instagram</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Twitter</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Tik Tok</p></a>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>CONTACTO</h2>
                        <a href="#"><p><i class="fa fa-map-marker" aria-hidden="true"></i>CDMX, MÉXICO</p></a>
                        <a href="#"><p><i class="fa fa-phone" aria-hidden="true"></i>+52 5575416492</p></a>
                        <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i>dadas123brayan@gmail.com</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
       <div class="footer_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copy_txt">
                        <p>Copyright © 2020  Diseñado por <span>Sneakers AN</span></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_logo">
                        <img src="img/fedex.png">
                        <img src="img/master-card.png">
                        <img src="img/paypal.png">
                        <img src="img/visa.png">
                        <img src="img/american-express.png">
                        <img src="img/dhl.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
</body>
</html>

