<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

try {
  
  $mail = new PHPMailer(true);

  // Server settings
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'jarnijianas@gmail.com';
  $mail->Password = 'pxjimtcngttjjooj'; 
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  if (isset($_POST['submit'])) {
    function validate($data)
    {
      $data = trim($data);
      $data = utf8_decode($data);
      return $data;
    }
    $name = validate($_POST['name']); 
    $email = validate($_POST['email']); 
    $subject = validate($_POST['subject']); 
    $message = validate($_POST['message']); 

    
    $mail->setFrom('contact@fastmove.com', 'FastMove Contact');

    
    $mail->addAddress('jarnijianas@gmail.com');

    
    $mail->addReplyTo($email, $name);

    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<p><strong>$name</strong> veut vous envoyer un message.</p><br>
    <strong>Nom : </strong>$name <br> 
    <strong>Email : </strong>$email <br>
    <strong>Sujet : </strong>$subject <br><br>
    <strong>Message : </strong>$message";
    
    $mail->send();
    $_SESSION['done'] = 'Message envoyé avec succès.';
    header("location: contact.php");
  } else {
    $_SESSION["error"] = 'Message n\'a pas été soumis.';
    header("location: contact.php");
  }
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}