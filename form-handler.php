<?php
$name = $_POST['nombre'];
$visitor_email = $_POST['email'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];

$email_from = 'info@duracarhn.com'

$email_subject = 'Nueva Entrega'
    
$email_body = "User Name: $name.\n ".  
                "User Name: $visitor_email.\n".
                  "User Name: $subject.\n".
                    "User Name: $message.\n";

$to = 'vrac2003@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: visita tgu.html");


?>