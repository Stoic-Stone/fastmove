<?php
session_start();
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader (assuming it's in vendor/autoload.php)
require 'vendor/autoload.php';

try {
  // Create a new PHPMailer instance
  $mail = new PHPMailer(true);
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  
  // Server settings
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'jarnijianas@gmail.com';
  $mail->Password = 'pxjimtcngttjjooj'; // Replace with your actual password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  // Check if the form was submitted and data exists
  if (isset($_POST['submit'])) {
    function validate($data)
    {
      $data = trim($data);
      $data = utf8_decode($data);
      return $data;
    }
    $name = validate($_POST['name']); 
    $email = validate($_POST['email']); 
    $service = validate($_POST['service']); 

    // Sender details (consider using a dedicated email address for forms)
    $mail->setFrom('contact@fastmove.com', 'FastMove Contact');

    // Set recipients (potentially use additional recipients)
    $mail->addAddress('jarnijianas@gmail.com');

    // Set Reply-To header (optional)
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Demande de devis';
    $mail->Body = "<p><strong>$name</strong> veut demander un devis.</p><br>
    <strong>Nom : </strong>$name <br> 
    <strong>Email : </strong>$email <br>
    <strong>Service : </strong>$service";
    
    $mail->send();
    $_SESSION['done'] = 'Demande envoyé avec succès.';
    header("location: index.php");
  } else {
    $_SESSION["error"] = 'Demande n\'a pas été soumis.';
    header("location: index.php");
  }
} catch (Exception $e) {
  echo "Demand could not be sent. Mailer Error: {$mail->ErrorInfo}";
}