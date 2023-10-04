<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/vendor/autoload.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'eduflow206@gmail.com';
    $mail->Password   = 'ekypbeshjdzxbsoq';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 25;

    $mail->setFrom('eduflow206@gmail.com', 'Admin');
    $mail->addAddress($email, $r[2]);
    $mail->addReplyTo('eduflow206@gmail.com', 'Admin');


    $mail->isHTML(true);
    $mail->Subject = 'Forgot Password';
    $mail->Body    = 'Your Password for this email account is  <strong>'.$r[4].'</strong>';
    // $mail->AltBody = 'This is the plain text message body for non-HTML mail clients';
    
    $mail->send();
    echo '<script>alert("Email Sent Successfully "); window.location.href = "index.php";</script>';
} catch (Exception $e) {
    echo '<script>alert("Forgot password failed..! "); window.location.href = "index.php";</script>';
}
		
?>

<!-- eduflow206@gmail.com
Helpdesk@123 -->