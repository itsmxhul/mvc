
<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
ob_start();
$mail = new PHPMailer(true);


$OTP = rand(1000,9999);
if (isset($_POST['sendmail'])) {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'ibook4462@gmail.com';                     //SMTP username
    $mail->Password   = 'vfafcfgoiijqmtgt';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('ibook4462@gmail.com', 'Bookit');
    $mail->addAddress($_POST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>TEST EMAIL</h1>: OTP : $OTP";
    $bodyContent .= '<p>This is a testing mail from book it</p>';
    $mail->Body    = $bodyContent;
    $mail->Subject = 'Email from Localhost by mehul';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}

?>
<form method="post">
    <input type="text" name="email" id="email">
    <input type="text" name="body" id="body">
    <input type="submit" name="sendmail" id="sendmail">
</form>

