<?php 
    $ver = $_GET["ver"];
    $cantidad = $_GET["cant"];
    $prd1 = $_GET["prd1"];
    $prd2 = $_GET["prd2"];
    $prd3 = $_GET["prd3"];

    $btn = 0;


    if ($cantidad == 0) {
      header("Location: http://localhost/Portales/productos.html");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
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
        margin: 2% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
    
    }


    
.modallol {
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
    .modallol:target {
        opacity:1;
        pointer-events: auto;
    }
    .modallol > div {
        width: 800px;
        height: 850px;
        position: relative;
        margin: 2% auto;
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

    .form {
  position: relative;
  z-index: 1;
  max-width: 900px;
  max-height: 650px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #a63a3a;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #722626;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 18px;
}
.form .message a {
  color: #722626;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.ojo {
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    font-family:Arial, Helvetica, sans-serif;
    font-size:13px;
    text-align:left;
    width:auto;
    color: #9F6000;
    background-color: #FEEFB3;
}

.select-css {
  display: block;
  font-size: 16px;
  font-family: 'Verdana', sans-serif;
  font-weight: 400;
  color: #444;
  line-height: 1.3;
  padding: .4em 1.4em .3em .8em;
  width: 400px;
  max-width: 100%; 
  box-sizing: border-box;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.03);
  border-radius: .3em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#f7f7f7 100%);
  background-repeat: no-repeat, repeat;
  background-position: right .7em top 50%, 0 0;
  background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
  display: none;
}
.select-css:hover {
  border-color: #888;
}
.select-css:focus {
  border-color: #aaa;
  box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
  box-shadow: 0 0 0 3px -moz-mac-focusring;
  color: #222; 
  outline: none;
}
.select-css option {
  font-weight:normal;
}
label{
    font-weight: normal;
}


</style>
</head>
<body>
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

<div id="openModal2" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="form">
            <br><br><h2 align="center">Iniciar sesión</h2><br>
    <form class="login-form" action="login.php" method="POST" style="max-height: 250px;">
      <input type="text" name="correo" placeholder="Correo" required=""><br>
      <input type="text" name="user" placeholder="Usuario" required=""><br>
      <input type="password" name="pass" placeholder="Contraseña" required=""><br>
      <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
      <input type="hidden" name="prd1" value="<?php echo $prd1; ?>">
      <input type="hidden" name="prd2" value="<?php echo $prd2; ?>">
      <input type="hidden" name="prd3" value="<?php echo $prd3; ?>">
      <button type="submit" name="iniciar">Iniciar sesión</button>
      <p class="message">¿No estás registrado? <a href="#divcrear">Crea una cuenta</a></p>
    </form>
  </div>
        
    </div>
</div>

<div id="divcrear" class="modallol">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="form">
            <h2 align="center">Crear cuenta</h2>
    <form class="login-form" action="login.php" method="POST">
      <input type="text" name="nombre" placeholder="Nombre" required="">
      <input type="text" name="correo" placeholder="Correo" required="">
      <input type="text" name="usern" placeholder="Usuario" required="">
      <input type="password" name="passn" placeholder="Contraseña" required="">
      <input type="text" name="direccion" placeholder="Dirección" required="">
      <input type="text" name="cp" placeholder="Código Postal" required="">
      <input type="text" name="ciudad" placeholder="Ciudad" required="">
      <input type="text" name="pais" placeholder="País" required="">
      <input type="text" name="telefono" placeholder="Teléfono" required="">
      <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
      <input type="hidden" name="prd1" value="<?php echo $prd1; ?>">
      <input type="hidden" name="prd2" value="<?php echo $prd2; ?>">
      <input type="hidden" name="prd3" value="<?php echo $prd3; ?>">
      <button type="submit" name="crear">Crear</button>
      <p class="message">¿Ya tienes cuenta? <a href="#openModal2">Inicia sesión</a></p>
    </form>
  </div>

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
                <div class="col-md-7" style="width: 800px;">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.html">Inicio</a></li>
                      <li><a href="productos.html">Tienda</a></li>
                      <li><a href="#"  style="color: red; font-weight: 5px;">CARRITO DE COMPRAS</a></li>
                      <li><a href="#openModal">Términos y condiciones de uso</a></li>
                    </ul>
                </div>
                <div class="col-md-2" style="width: 175px;">
                    <div class="cart">
                        <?php

                            if ($ver == 1024) {
                                $btn = 1;
                                $user = $_GET["user"];
                        ?>  
                                <p align="left" style="font-family: 'Roboto', sans-serif; font-size: 21px; color: #d10000">¡Hola, <?php echo $user; ?>!</p>
                        <?php
                            }
                        ?>
                    </div>
            </div>
        </div>
    </section>
</header>
 <section class="our_skill">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                  <h2 align="center">Sus productos:</h2>
                  <hr aling="center" style=" background-color: #62aabf; height: 1px; border: 0;">

                
                  </section>
                    <section id="cart_items" style="margin-left: 30px;">
        <div class="container" style="margin-right: 100px;">
            
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image"><h4 align="center" style="font-family: 'Roboto',sans-serif;">Artículos</h4></td>
                            <td class="description"><h4 align="center" style="font-family: 'Roboto',sans-serif;">Nombre</h4></td>
                            <td class="price"><h4 align="center" style="font-family: 'Roboto',sans-serif;">Precio</h4></td>
                            <td class="quantity"><h4 align="center" style="font-family: 'Roboto',sans-serif;">Cantidad</h4></td>
                            <td class="total"><h4 align="center" style="font-family: 'Roboto',sans-serif;">Subtotal</h4></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if ($prd1 > 0) {
                    ?>
                        <tr>
                            <td class="cart_product" style="width: 200px;">
                                <a href="img/yeezesolo.png"><img src="img/yeezesolo.png" alt="" width="150px"></a>
                            </td>
                            <td class="cart_description" style=" width: 400px;">
                                <h4><a style="cursor: default; text-decoration: none;">Air Yeezy 2 Pure Platinum</a></h4>
                                <p>ID: 2</p>
                            </td>
                            <td class="cart_price">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p>$123 000.00</p>
                                </h4>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                    <input class="cart_quantity_input" type="text" name="quantity" id="sum1" value="<?php echo $prd1 ?>" autocomplete="off" size="2">
                                    </h4>
                                </div>
                            </td>
                            <td class="cart_total">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p class="cart_total_price" id="subt1">$<?php echo number_format($prd1*123000); ?></p>
                                </h4>
                            </td>
                            <td class="cart_delete">
                              <div id="borrarjs1">
                              <script>
                                function alerta()
                                    {
                                    var mensaje;
                                    var opcion = confirm("¿Seguro que desea eliminar este producto de su carrito?");
                                    if (opcion == true) {
                                    <?php
                                      $resta = $cantidad-($prd1*123000);
                                    ?>

                                      window.location.href = "next.php" + "?cant=" + <?php echo $resta; ?> + "&prd1=0&prd2=" + <?php echo $prd2; ?> + "&prd3=" + <?php echo $prd3; ?> + "&ver=0";
                                      
                                    }
                                    else {
                                    }
                                }
                              </script>
                              <a class="cart_quantity_delete" onclick="alerta()"><i class="fa fa-times"></i></a>
                              </div>
                            </td>
                        </tr>

                    <?php
                        }
                        if ($prd2 > 0) {
                    ?>

                        <tr>
                            <td class="cart_product" style="width: 200px;">
                                <a href="img/backfutsolo.png"><img src="img/backfutsolo.png" alt="" width="150px"></a>
                            </td>                            </td>
                            <td class="cart_description">
                                <h4><a style="cursor: default; text-decoration: none;">Air Mag</a></h4>
                                <p>ID: 4</p>
                            </td>
                            <td class="cart_price">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p>$869 000.00</p>
                                </h4>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                    <input class="cart_quantity_input" type="text" id="sum2" name="quantity" value="<?php echo $prd2; ?>" autocomplete="off" size="2">
                                    </h4>
                                </div>
                            </td>
                            <td class="cart_total" style="width: 182px;">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p class="cart_total_price" id="subt2">$<?php echo number_format($prd2*869000); ?></p>
                                </h4>
                            </td>
                            <td class="cart_delete">
                              <div id="borrarjs2">
                              <script>
                                function alerta2()
                                    {
                                    var mensaje;
                                    var opcion = confirm("¿Seguro que desea eliminiar este producto de su carrito?");
                                    if (opcion == true) {
                                    <?php
                                      $resta = $cantidad-($prd2*869000);
                                    ?>

                                      window.location.href = "next.php" + "?cant=" + <?php echo $resta; ?> + "&prd1=" + <?php echo $prd1; ?> + "&prd2=0&prd3=" + <?php echo $prd3; ?> + "&ver=0";
                                      
                                    }
                                    else {
                                    }
                                }
                              </script>
                              <a class="cart_quantity_delete" onclick="alerta2()"><i class="fa fa-times"></i></a>
                            </div>
                            </td>
                        </tr>

                    <?php
                        }
                        if ($prd3 > 0) {
                    ?>

                        <tr>
                            <td class="cart_product" style="width: 200px;">
                                <a href="img/offw.png"><img src="img/OFFW.jpg" alt="" width="150px"></a>
                            </td>                            </td>
                            <td class="cart_description">
                                <h4><a style="cursor: default; text-decoration: none;">Nike Dunk Low</a></h4>
                                <p>ID: 3</p>
                            </td>
                            <td class="cart_price">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p>$13 000.00</p>
                                </h4>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                    <input class="cart_quantity_input" type="text" id="sum3" name="quantity" value="<?php echo $prd3; ?>" autocomplete="off" size="2">
                                    </h4>
                                </div>
                            </td>
                            <td class="cart_total" style="width: 182px;">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p class="cart_total_price" id="subt3">$<?php echo number_format($prd3*13000); ?></p>
                                </h4>
                            </td>
                            <td class="cart_delete">
                              <div id="borrarjs3">
                              <script>
                                function alerta3()
                                    {
                                    var mensaje;
                                    var opcion = confirm("¿Seguro que desea eliminiar este producto de su carrito?");
                                    if (opcion == true) {
                                    <?php
                                      $resta = $cantidad-($prd3*13000);
                                    ?>

                                      window.location.href = "next.php" + "?cant=" + <?php echo $resta; ?> + "&prd1=" + <?php echo $prd1; ?> + "&prd2=" +  <?php echo $prd2; ?> + "&prd3=0&ver=0";
                                      
                                    }
                                    else {
                                    }
                                }
                              </script>
                              <a class="cart_quantity_delete" onclick="alerta3()"><i class="fa fa-times"></i></a>
                            </div>
                            </td>
                        </tr>

                    <?php
                        }
                    ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="cart_price">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p>Total</p>
                                </h4>
                            </td>
                            <td class="cart_total" style="width: 182px;">
                                <h4 align="center" style="font-family: 'Roboto',sans-serif;">
                                <p class="cart_total_price" id="subt2">$<?php echo number_format($cantidad,2); ?></p>
                                </h4>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
                         <?php
                            if ($ver == 1024) {
                        ?>  

                        <script>
                          if (document.getElementById("sum1")) {
                            document.getElementById("sum1").disabled = true;
                          }
                          if (document.getElementById("sum2")) {
                            document.getElementById("sum2").disabled = true;
                          }
                          if (document.getElementById("sum3")) {
                            document.getElementById("sum3").disabled = true;
                          }

                          if (document.getElementById("borrarjs1")) {
                            var x = document.getElementById("borrarjs1");
                            x.style.display = "none";
                          }
                          if (document.getElementById("borrarjs2")) {
                            var y = document.getElementById("borrarjs2");
                            y.style.display = "none";
                          }
                          if (document.getElementById("borrarjs3")) {
                            var z = document.getElementById("borrarjs3");
                            z.style.display = "none";
                          }
                          
                          
                         
      
                        </script>
                        <hr aling="center" style=" background-color: #62aabf; height: 1px; border: 0;">
                        <section>
                            <div style="font-family: 'Roboto',sans-serif; font-size: 20px; border: 1.5px solid #62aabf; padding: 25px 25px 25px 25px; margin: 2% 10% 10% 10%;">
                                <p align="center" style="font-size: 48px; color: #d10000;"><b>Pago</b></p>
                                
                                <div class="ojo"><b>Por ahora aceptamos solo los siguientes métodos de pago:</b></div>
                                <p>Forma de pago:</p>
                                <p> 
                                    <select name="formapago" class="select-css">
                                    <option value="mst">Mastercard</option> 
                                    <option value="value3">Visa</option>
                                    </select>
                                </p>
                                <div class="img" style="width: 250px; height: 250px;position: absolute; z-index: 1; margin-left: 49%;"><img src="img/descuento.png"></div>
                                <form action="tique.php" method="POST" onSubmit="return validacion()">
                                <p>Número de cuenta: </p>
                                <p><input type="text" name="cuenta" placeholder="xxxxxxxxxxxxxx" required=""></p>
                                <p>Confirmar número de cuenta: </p>
                                <p><input type="text" name="cuenta2" placeholder="xxxxxxxxxxxxxx" required=""></p>
                                <p>Tipo de pago:</p>
                                <p><label><input type="radio" name="tipop" checked="" value="1"> Contado</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="tipop" value="2"> A tres meses</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="tipop" value="3"> A seis meses</label></p>
                                <br>
                                <p><a href="#openModal" style="text-decoration: none;"><input type="checkbox" id="terminos" name="terminos" required="" checked=""></a><a href="#openModal" style="cursor: crosshair; text-decoration: none;"> Acepto los términos y condiciones de uso</a></p>

                                <input type="hidden" name="usern" value="<?php echo $user; ?>">
     
                                <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
                                <input type="hidden" name="prd1" value="<?php echo $prd1; ?>">
                                <input type="hidden" name="prd2" value="<?php echo $prd2; ?>">
                                <input type="hidden" name="prd3" value="<?php echo $prd3; ?>">



                                <br>
                                <button type="submit" name="cancelar" class="btn-borde" style="margin-left: 55%;">Cancelar compra</button>
                                <button type="submit" name="enviar" class="btn-borde" style="margin-left: 10px">Continuar</button>
                                </form>

                            </div>
                        <?php
                            }
                        ?>

</section>
<section class="our_skill">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                  <hr style="background-color: #62aabf; height: 1px; border: 0; width: 1250px;">
                  <?php
                    if ($btn == 0) {
                  ?>
                  <script>
                    function Actualizar(){
                      var val1 = 0;
                      var val2 = 0;
                      var val3 = 0;

                      var s1 = 0;
                      var s2 = 0;
                      var s3 = 0;

                      if (document.getElementById("sum1")) {
                        val1 = document.getElementById("sum1").value;
                        s1 = (123000*val1);
                      }
                      if (document.getElementById("sum2")) {
                        val2 = document.getElementById("sum2").value;
                        s2 = (869000*val2);
                      }
                      if (document.getElementById("sum3")) {
                        val3 = document.getElementById("sum3").value;
                        s3 = (13000*val3);
                      }
                      

                      var cantidad = s1+s2+s3;

                      window.location.href = "next.php" + "?cant=" + cantidad + "&prd1=" + val1 + "&prd2=" + val2 + "&prd3=" + val3 + "&ver=0"; 

                      console.log(val1);
                    }
                  </script>
                  <button id="btnActualizar" style="padding: 0; border: none; background: none; font-size: 24px;" onclick="Actualizar();">Actualizar</button>
                  <button id="btnComprar" class="btn-borde" onclick="window.location.href='#openModal2'">Comprar</button>
                  <?php
                    }
                  ?>
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
