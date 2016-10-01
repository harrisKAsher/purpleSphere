<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
 // Collect the data sent from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $captcha = $_POST['cap_code'];
        
//Check the fields that they are not empty

    if (empty($name) || empty($email)  || empty($address) || empty($phone)) {
        $errors['fields'] = 'All fields are required, please fill in each one.';
    }
    

    
    
//Check that the captch code matched the picture
if ($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
    $errors['security'] = 'Sorry, your entered security code does not match the security image.';
}
    
//If there are errors, return the contact page to fix them
if(!empty($errors)){
    include 'register.php';
    exit;
}
    
//Assemble the message
$finalmessage ="Name: $name \n";
$finalmessage .= "Email: $email \n";
$finalmessage .= "Address: $address \n";
$finalmessage .= "Phone Number: \n $phone";
    
//Send the message
$to ="3601arias@gmail.com";
$from = "From: $email";
$result = mail($to, $subject, $finalmessage, $from);
    
//Let the sender know what happened
if ($result == TRUE) {
    $errors[] = "Thank you $name you are now registered for the Prison to Prison Triathlon. We will be contacting you with more details shortly.";
} else {
    $errors[] = "Sorry $name an error occurred and you could not be registered at this time.";
}
    
//Removes all values previously stored
unset($name);
unset($email);
unset($address);
unset($phone);
unset($captcha);
    
// Display the contact page with the new message
include 'register.php';
exit;
    
} else {
 include 'register.php';
 exit;
}
?>