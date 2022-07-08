<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'SMTP/PHPMailer/Exception.php';
require 'SMTP/PHPMailer/PHPMailer.php';
require 'SMTP/PHPMailer/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "Fweb@basesysoportes.com";
$mail->Password   = "Fweb4159+";

$mail->IsHTML(true);
$mail->AddAddress("hola@neverasycongeladores.com", "Gerencia");
$mail->addReplyTo("reservas@neverasycongeladores.com" , "Lavanderia");
$mail->SetFrom("Fweb@basesysoportes.com","Reservas");
// $mail -> addReplyTo($_POST['email'], $_POST['nombre']);
$mail->Subject = 'Enviado por ';
$content = 'Su codigo es: ' ;

$mail->MsgHTML($content); 
if(!$mail->Send()) { 
 echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
  var_dump($mail);
} else {
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
}

?>
