<?php
    // Data coming from the HTTP POST request
    $name = $_POST["name"];
    $from = $_POST["email"];
    $message = $_POST["message"];
    
    // Prepare the email
    // You can customize these data accordingly
    $subject = "New message from " . $name;
    $to = "buh12321@mailinator.com";
    
    // Lets send the mail
    if(mail($to, $subject, $message, $from)) {
        echo "Sent";
    }  else {
        echo "Failed";
    }
?>
