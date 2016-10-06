<?php

require_once('./credentials.php');
require_once('./vendor/autoload.php');

// Create the Transport
$transport = Swift_SmtpTransport::newInstance($mail_host, $mail_port, 'ssl')
  ->setUsername($mail_user)
  ->setPassword($mail_pass);
$mailer = Swift_Mailer::newInstance($transport);

$email   = stripslashes($_POST['email']);
$name    = stripslashes($_POST['name']);
$content = stripslashes($_POST['content']);

if(!$name || !$content || !$email) {
   $return['error'] = true;
   echo json_encode([
      'error' => true,
      'msg' => 'Please fill out all 3 fields',
   ]);
   exit;
}

if(preg_match( "/.+@.+\..+/", $email ) === 0) {
   echo json_encode([
      'error' => true,
      'msg' => 'Please enter a valid email address',
   ]);
   exit;
}

$to = $mail_user;
$subject = "From davidrans.com Contact Page";
$body = "Email: $email\n\nName: $name\n\nMessage: $content";

$message = Swift_Message::newInstance($subject)
              ->setFrom(array('dave.g.rans@gmail.com' => 'davidrans.com'))
              ->setTo(array('dave.g.rans@gmail.com'))
              ->setBody($body);

$result = $mailer->send($message);

echo json_encode([
   'error' => false,
   'msg' => "Thanks for your interest! I'll get back to you as soon as I can.",
]);
