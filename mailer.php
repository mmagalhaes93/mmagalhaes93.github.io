<?php
if(isset($_POST['submit'])){
    $to = "mariamagalhaes1328@gmail.com"; // this is your Email address
    $from = $_POST['form_email']; // this is the sender's Email address
    $name = $_POST['form_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['form_message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['form_message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>