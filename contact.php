<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['Email'];
    $message = $_POST['Message'];

    mail("kangji1999@utexas.edu","Personal Website Message",$message,"From: $name<$visitor_email>");
    echo"<script type = 'text/javascript'>alert('your message sent successfully')
    </script>";

?>

