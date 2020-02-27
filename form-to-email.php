<?php
if (!isset($_POST['submit']))
{
    echo "error; you need to submit the form";
}

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];

if (empty($name) || empty($email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_subject = "Website Contact Reach Out";
$email_body = "You have recieved a new message from user $name.\n".
    "email address: $email\n".
    "phone number: $phone\n".
    "Here is the message: $message\r\n".

$to = "jasonjung1016@gmail.com";
$headers = "From: jasonjung1016@gmail.com \r\n";

mail($to, $email_subject, $email_body, $headers);

?>