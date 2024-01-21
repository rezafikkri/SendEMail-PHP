<?php

// send mail using php built in mail function
$to      = 'fikkri.reza@gmail.com';
$subject = 'Belajar mengirim email';
$message = 'Hello world';
$headers = 'From: webmaster@example.com'       . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail($to, $subject, $message, $headers));
