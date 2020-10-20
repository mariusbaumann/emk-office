<?php
$to      = 'andreas.e.papageorgiou@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: sysadmin@emk-schweiz.ch' . "\r\n" .
    'Reply-To: sysadmin@emk-schweiz.ch' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>