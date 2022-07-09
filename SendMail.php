<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
  $mail->SMTPDebug = 2;                  
  $mail->isSMTP();                      
  $mail->Host   = 'smtp.gmail.com;';          
  $mail->SMTPAuth = true;              
  $mail->Username = 'kanuanand521@gmail.com';        
  $mail->Password = '6387649133';            
  $mail->SMTPSecure = 'tls';              
  $mail->Port   = 587;

  $mail->setFrom('kanuanand521@gmail.com', 'ANand');    
  $mail->addAddress('vishwashanand873700@gmail.com');
  $mail->addAddress('vishwashanand873700@gmail.com', 'Name');
  
  $mail->isHTML(true);                
  $mail->Subject = 'Subject';
  $mail->Body = 'HTML message body in <b>bold</b> ';
  $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  $mail->send();
  echo "Mail has been sent successfully!";
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//comment
?>
