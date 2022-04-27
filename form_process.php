<?php

require_once $_SERVER['DOCUMENT_ROOT']."/inc/filename.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT']."/inc/vendor/autoload.php";

$mail = new PHPMailer(true);
$Name_error = $Email_error = "";
$Name = $Email = $message = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["Name"])) {
    $Name_error = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $Name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["Email"])) {
    $Email_error = "Email is required";
  } else{
    $Email = test_input($_POST["Email"]);
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
      $Email_error = "Invalid Email format";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if ($Name_error == '' and $Email_error == ''){
    $message_body = '';
    unset($_POST['submit']);
    foreach ($_POST as $key => $value){
      $message_body .= nl2br("$key: $value\n" . "\n");
    }

    $to = 'jamie@jamiesomers.ie';
    $subject = 'Contact Form Submit';
    $txt = "Name = ". $Name . "\r\n" .  " Email = " . $Email . "\r\n" . "\r\n Message =" . $message_body;

    $headers = "From: noreply@codeconia.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($Email!=NULL){
      try {
          //Server settings
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
          $mail->Username   = 'jamiecontactform@gmail.com';                     //SMTP userName
          $mail->Password   = $password;                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

          //Recipients
          $mail->setFrom('jamiecontactform@gmail.com', $Name);
          $mail->AddCC('jamiesomerrs@gmail.com', 'Jamie');
          $mail->addAddress('jamiesomerrs@gmail.com');     //Add a recipient

          //Content
          $mail->isHTML(true);                                  //Set Email format to HTML
          $mail->Subject = 'Contact Form Submit';
          $mail->Body    = $message_body;
          $mail->AltBody = $message;

          $mail->send();
          echo '<script src="/jquery-3.6.0.min.js"></script><script type="text/javascript">$(function Success(){$(".box2").show();$(".box2").delay(3500).fadeOut("slow");});</script>';
          ;
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
