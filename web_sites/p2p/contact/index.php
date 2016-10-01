<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
 // Collect the data sent from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
        
//Check the fields that they are not empty

    if (empty($name) || empty($email)  || empty($subject) || empty($message)) {
        $errors['fields'] = 'All fields are required, please fill in each one.';
    }
    

    
    
//Check that the captch code matched the picture
if ($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
    $errors['security'] = 'Sorry, your entered security code does not match the security image.';
}
    
//If there are errors, return the contact page to fix them
if(!empty($errors)){
    include 'contact.php';
    exit;
}
    
//Assemble the message
$finalmessage ="Name: $name \n";
$finalmessage .= "Email: $email \n";
$finalmessage .= "Subject: $subject \n";
$finalmessage .= "Message: \n $message";
    
//Send the message
$to ="3601arias@gmail.com";
$from = "From: $email";
$result = mail($to, $subject, $finalmessage, $from);
    
//Let the sender know what happened
if ($result == TRUE) {
    $errors[] = "Thank you $name for contacting us. We will try to respind as soon as possible.";
} else {
    $errors[] = "Sorry $name an error occured and your message could not be sent.";
}
    
//Removes all values previously stored
unset($name);
unset($email);
unset($subject);
unset($message);
unset($captcha);
    
// Display the contact page with the new message
include 'contact.php';
exit;
    
} else {
 include 'contact.php';
 exit;
}
?>