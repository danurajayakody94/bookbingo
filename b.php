<?php
$to      = 'malith124@gmail.com';
$subject = 'My Favourite List';
$message = 'Books - Harry Potter, Twilight, Lord of the Rings.';
$headers = 'From: malith.fernando@revport.net' . "\r\n" .
    'Reply-To: malith.fernando@revport.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header('Location: http://ascentic.revportx.com/myFav.html');
?>
