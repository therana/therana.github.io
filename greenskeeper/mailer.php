<?php
//hyperlocal guide
if(isset($_POST['inquiry'])) 
{

  $message = "<h3 style=\"font-family:helvetica;\">A user at GreensKeeperinc.com filled out the contact form. Here is the information they submitted.</h3><br><p style=\"font-family:helvetica;\">
    <b>Name:</b>  ".$_POST["name"].
    "<br><b>Email:</b>  ".$_POST["email"].
    "<br><b>Phone #:</b>  ".$_POST["tel"].
    "<br><b>Message:</b>  ".$_POST["message"]."</p>";

  require_once "phpmailer/PHPMailerAutoload.php"; //include phpmailer class

  // Instantiate Class  
  $mail = new PHPMailer();  

  // Set up SMTP  
  $mail->IsSMTP();                // Sets up a SMTP connection  
  $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
  $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
  $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
  $mail->Port = 465;  //Gmail SMTP port
  $mail->Encoding = '7bit';

  // Authentication  
  $mail->Username   = "mailer2996@gmail.com"; // Your full Gmail address
  $mail->Password   = "orkivllc1"; // Your Gmail password

  // Compose
  $mail->SetFrom = "ORKIV";
  $mail->AddReplyTo($_POST['email']);
  $mail->Subject = "User Submission @greenskeeperinc.com";      // Subject (which isn't required)  
  $mail->MsgHTML($message);
  $mail->From = "GreensKeeperinc.com";
  $mail->FromName = "GreensKeeperinc.com";

  // Send To  
  $mail->AddAddress("green48@cox.net"); // Where to send it - Recipient  

  $errors = array();
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    array_push($errors, 'Please enter a valid e-mail');
  }
  if(!$errors) {
    $mail->Send();
  } else {
    echo implode('<br />', $errors);
  }
  unset($mail);
  header('Location: http://www.greenskeeperinc.com');
}

?>