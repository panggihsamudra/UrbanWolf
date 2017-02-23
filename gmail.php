
<?php

date_default_timezone_set('Etc/UTC');
 
require 'mail/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
 
$mail->isSMTP();
 
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
 
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
 
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
//$mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
 
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
 
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
 
//Whether to use SMTP authentication
$mail->SMTPAuth = true;


//BEFORE USE U MUST ALLOW ALL ACCESS KLIK LINK BELOW https://www.google.com/settings/security/lesssecureapps
// TURN ON Access for less secure apps	


echo "string";
 
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "panggihsamudraa@gmail.com";
 
//Password to use for SMTP authentication
$mail->Password = "pedro1945";
 
//Set who the message is to be sent from
$mail->setFrom('panggihsamudraa@gmail.com', 'Panggih');
 
//Set an alternative reply-to address
$mail->addReplyTo('panggihsamudraa@gmail.com', 'Panggih');
 
//Set who the message is to be sent to
$mail->addAddress('panggihsamudraa@gmail.com', 'Panggih'); //i think u should use the same gmail
 
//Set the subject line
$mail->Subject = 'Inquiry Work';
 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body = '|==================== Work Inquiry ====================|'."<br>".
'Name                 :  '.$_POST['name']."<br>".
'Email               :  '.($_POST['email'])."<br>".
'Phone               :  '.$_POST['phone']."<br>".
'Message               :  '.$_POST['messages']."<br>";
 
//Replace the plain text body with one created manually
$mail->AltBody = 'Inquiry Work Message';
 
//Attach an image file
$mail->addAttachment('');
 
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
header('Location: http://urbanwolf.esy.es/index.html');