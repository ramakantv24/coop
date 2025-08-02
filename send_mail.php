<?php
    $to      = 'ramakantv24@gmail.com';
    $subject = 'helloooooo1111';
    $message = 'hello22222222222222222222222222222';
    $headers = 'From: thecooperativestrust@gmail.com' . "\r\n" .
                 'Reply-To: thecooperativestrust@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>