<?php 
require_once "con_db.php" ;
$conexion = conexion();


if (isset($_POST['reservar'] )){ 
if (strlen($_POST['nombre']) >= 1 && 
   strlen($_POST['email']) != 1 &&
   strlen($_POST['celular']) >= 1 &&
   strlen($_POST['observacion']) >= 1){

 
    $codigo_user = rand(111111 , 999999);
    $fecha_entrega_user = date('m-d-Y h:i:s a', time());    
    $nombre =  ($_POST['nombre']);
    $correo = ($_POST['email']);
    $celular = ($_POST['celular']);
    $observacion =  ($_POST['observacion']);
    $consulta = "INSERT into reservas( nombre, email, celular, observacion, fecha_entrega_user,codigo_user) VALUES ('$nombre','$correo','$celular','$observacion','$fecha_entrega_user','$codigo_user')";
    $resultado = mysqli_query($conexion,$consulta);

    if ($resultado){

        ?>
        <body id="codigo_body">
        <div class="p-3 mb-2 bg-info text-white" <div class="card text-white bg-primary">
          <img class="card-img-top" src="holder.js/100px180/" alt="">
          <div class="card-body" backgo>
            <h4 class="card-title"><?php echo $nombre ?> tu codigo de reservacion es: </h4>
            <p class="card-text"><?php echo $codigo_user ?></p>
          </div>
            
        </body>
      
            
        <?php

    }  else {
        ?>
        <h3>F no se pudo</h3>
        <?php
    }
}  
} 

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
$mail->addReplyTo($correo);

$mail->SetFrom("Fweb@basesysoportes.com","Reservas");
// $mail -> addReplyTo($_POST['email'], $_POST['nombre']);
$mail->Subject = 'Enviado por ';
$content = 'Su codigo es:' ;

$mail->MsgHTML($content); 
if(!$mail->Send()) { 
 echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
  var_dump($mail);
} else {
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
}

?> 