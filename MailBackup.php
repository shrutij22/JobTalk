<?php
$to_email =$_POST['email'];
$Email="jobtalk12@gmail.com";
$subject = "Welcome to the JobTalk";
$body = "Welcome to the JobTalk!
Thankyou for registering on JobTalk.We have received your registration details.
We'll keep you posted on the latest company interviews,news and many more!


If you have any questions,please let us know!

Regards,
JobTalk
mail-jobtalk12@gmail.com"
$headers = "From: $Email";
if(mail($to_email, $subject, $body, $headers)){
    echo "success";
}
else
    echo "error";
?>
