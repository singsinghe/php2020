<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

 

include "PHPMailer.php";
include "SMTP.php"; 


//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.naver.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = "ssl";

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'newmr';

//Password to use for SMTP authentication
$mail->Password = '2N8ZX2BX3MUB';

//Password to use for SMTP authentication
$mail->CharSet = 'UTF-8';

//Set who the message is to be sent from
$mail->setFrom('newmr@naver.com', '구명석');

//Set an alternative reply-to address
$mail->addReplyTo('newmr@naver.com', '구명석');

//Set who the message is to be sent to
$mail->addAddress('singsinghe@gmail.com', '서기');

//Set the subject line
$mail->Subject = '메일 테스트입니다. ';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("테스트입니다. <br> 안녕하세요. 서기입니다. ");

//Replace the plain text body with one created manually
$mail->AltBody = '동해물과 백두산이 마르고 닳도록';

//Attach an image file
$mail->addAttachment('a.jpg');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
 