<?php
$mailTo = 'dittyzong432@gmail.com';
$username = htmlspecialchars($_POST['idi_name']);
$usernumber = htmlspecialchars($_POST['idi_number']);
$useremail = htmlspecialchars($_POST['idi_email']);
$usersubject = htmlspecialchars($_POST['idi_subject']);
$usermessage = htmlspecialchars($_POST['idi_message']);
$message =  'From: '.$username.'; Email: '.$useremail.' ; Telephone: '.$usernumber.' ; Message: '.$usermessage;
$headers .= 'From:' . $mailFrom . '\r\n';
mail($mailTo, $usersubject, $message, $headers);
?>
