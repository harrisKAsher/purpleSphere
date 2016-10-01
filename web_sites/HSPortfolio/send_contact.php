<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

// Contact subject
 $subject ="$subject"; 

// Details
 $message="$comment"; 


// Mail of sender
 $mail_from="$email"; 

// From 
$header="from: $fname <$mail_from>"; 


// Enter your email address
 $to ='someone@somewhere.com'; 

$send_contact=mail($to,$subject,$message,$header);


 // Check, if message sent to your email 
// display message "We've recived your information"
 if($send_contact){
 echo "We've recived your contact information";
 }
 else {
 echo "ERROR";
 }
 ?>
</body>
</html>