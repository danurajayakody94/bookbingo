<?php
if(isset($_POST['submit'])){
    $to = "malith.fernando@revport.net"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
	$phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " " . $phone . " " . $from . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   	header('Location: http://ascentic.revportx.com');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
