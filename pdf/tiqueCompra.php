<?php



require 'fpdf/fpdf.php';


        $nombre = $_REQUEST['nombre'];
        $correo = $_REQUEST['correo'];
        $direccion = $_REQUEST['direccion'];
        $cp = $_REQUEST['cp'];
        $ciudad = $_REQUEST['ciudad'];
        $pais = $_REQUEST['pais'];
        $telefono = $_REQUEST['telefono'];


        $subtotal = $_REQUEST['subtotal'];
        $cant = $_REQUEST['cant'];
        $tp = $_REQUEST['tp'];
        $desc = $_REQUEST['desc'];
        $pormes = $_REQUEST['pagomes'];
        $ivan = $_REQUEST['iva'];
        $total = $_REQUEST['total'];

        $nprod = $_REQUEST['nprod'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(45);
    // Título
    $this->Cell(100,10,'Tique de compra',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Image('logo.png',10,8,32);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$aleat = rand(1, 1024);
$nombret = "Pedido".$aleat.".pdf";
$dir = $direccion.", ".$ciudad.", ".$pais;
$largo = 60;

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',12);
$pdf->Cell(60,10,'Nombre:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', $nombre),0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Correo:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', $correo),0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', 'Dirección:'),0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', $dir),0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', 'Código Postal:'),0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$cp,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', 'Teléfono:'),0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$telefono,0,1,'L');

$pdf->Ln(10);

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', 'Paquetería:'),0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,'DHL Express',0,1,'L');

$nrorast = rand(000001,999999);

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Entregando el:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$milis = strtotime("10-12-2020")+$nrorast;
$fecha = date("d-m-Y", $milis);
$pdf->Cell($largo,10,$fecha,0,1,'L');


$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,iconv('UTF-8', 'ISO-8859-1', 'Número de rastreo:'),0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$nrorast,0,1,'L');

$pdf->Ln(10);

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Productos:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$nprod,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Cantidad:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$cant,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Nro. de pedido:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$aleat,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Tipo de pago:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,$tp,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell($largo,10,'Subtotal:',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell($largo,10,'$'.number_format($subtotal),0,1,'L');

$desion = 0;

if ($tp == "De contado") {
    $desion = 1;
    $pdf->SetFont('Arial','',12);
    $pdf->Cell($largo,10,'Descuento aplic.:',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($largo,10,'$'.number_format($desc,2),0,1,'L');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell($largo,10,'IVA:',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($largo,10,'$'.number_format($ivan,2),0,1,'L');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell($largo,10,'Total:',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($largo,10,'$'.number_format($total,2),0,1,'L');
}
else{
    $pdf->SetFont('Arial','',12);
    $pdf->Cell($largo,10,'IVA:',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($largo,10,'$'.number_format($ivan,2),0,1,'L');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell($largo,10,'Total:',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($largo,10,'$'.number_format($total,2),0,1,'L');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell($largo,10,'Pago por mes:',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell($largo,10,'$'.number_format($pormes,2),0,1,'L');
}
    
    $pdf->Ln(20);
    
    $pdf->SetFont('Arial','I',12);
    $pdf->SetX(50);
    $pdf->Cell(75,10,iconv('UTF-8', 'ISO-8859-1', '¡Gracias por comprar en '),0,0,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->SetTextColor(209,0,0);
    $pdf->Cell(1,10,iconv('UTF-8', 'ISO-8859-1', 'Sneakers AN'),0,0,'C');
    $pdf->SetFont('Arial','I',12);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(30,10,iconv('UTF-8', 'ISO-8859-1', '!'),0,0,'C');

$pdf->Output($nombret,'I');
$pdfdoc = $pdf->Output($nombret, "S"); 

include("../sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
                
        $mail_username="sneakersAN.noreply@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
        $mail_userpassword="SneakersAn";//Tu contraseña de gmail
        $mail_addAddress=$correo;//correo electronico que recibira el mensaje
        $template="email_template2.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
        
        //Inicio captura de datos enviados por $_POST para enviar el correo 
        $mail_setFromEmail=$correo;
        $mail_setFromName="SneakersAN";
        $txt_message="Productos: <em>".$nprod."</em><br>Llegando: <em>".$fecha."</em><br>Paquetería: <em>DHL Express</em><br>Número de rastreo: <em>".$nrorast."</em>";
        $mail_subject="Compra#".$aleat;
        
        sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template, $pdfdoc, $nombret);









include('../conexion.php'); 
$qy = $cn->query("SELECT id_usu FROM usuarios WHERE correo_usu='$correo';");

        while ($fila = $qy->fetch_object()) {
                $idus = $fila->id_usu;
                }
                mysqli_free_result($qy);



$cn->query("UPDATE compra SET paqueteria_compra='DHL Express', entrega_compra='$fecha', nro_rastreo_compra='$nrorast', nro_pedido_compra='$aleat', pago_compra='$tp', subtotal_compra='$subtotal', desc_compra='$desion', iva_compra='$ivan', total_compra='$total' WHERE id_usu_usuarios=$idus;");
?>