<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];

$email_from = 'arunbyale4@gmail.com';

$email_subject = 'New Form Submisson';

$email_body = "User Name: $name.\n".
              "User Email: $visito_email.\n".
              "Subject: $subject.\n".  

$to = 'manisharaiwade@gmail.com';

$headers = "From $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

?>