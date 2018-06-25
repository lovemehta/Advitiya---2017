<?php
include_once "lib/swift_required.php";
$pEmailGmail = 'sonukedia00@gmail.com';
$pPasswordGmail = 'iamsupercool';
$pFromName = 'abc'; //display name

$pTo = '2016meb1142@iitrpr.ac.in'; //destination email
$pSubjetc = "abc registration"; //the subjetc 
$pBody = '<html><body><p>fuck you</p></html></body>'; //body html

$transport = Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
            ->setUsername($pEmailGmail)
            ->setPassword($pPasswordGmail);

$mMailer = Swift_Mailer::newInstance($transport);

$mEmail = Swift_Message::newInstance();
$mEmail->setSubject($pSubjetc);
$mEmail->setTo($pTo);
$mEmail->setFrom(array($pEmailGmail => $pFromName));
$mEmail->setBody($pBody, 'text/html'); //body html

if($mMailer->send($mEmail) == 1){
    echo 'send ok';
}
else {
    echo 'send error';
}
?>