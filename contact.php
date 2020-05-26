<?php
    $name = $_REQUEST['name'];
    $visitor_email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    mail("kangji1999@utexas.edu","Personal Website Message",$message,"From: $name<$visitor_email>");
    echo"<script type = 'text/javascript'>alert('your message sent successfully')
    window.history.log(-1);
    </script>";

?>

