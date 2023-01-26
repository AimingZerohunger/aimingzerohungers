<?php?
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from= 'aimingzerohungergoals@aimingzerohunger.com';

$email_subject = 'New form Subsmission';

$email_body = "User Name:  $Name.\n".
              "User Email:  $visitor_email.\n".
              "User Subject:  $subject.\n".
              "User Message:  $message.\n".

$tpo ='aimingzerohungergoals@gmail.com';

$headers = "from: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: faq's.html");

if (mail){
    echo "Sent Successfully";
}
else (){
    echo "Sending Failed";
}














>