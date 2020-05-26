<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'kangji1999@utexas.edu';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "User message: $message.\n".
    $to = "kangji1999@utexas.edu";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To $visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: email.html");
?>

