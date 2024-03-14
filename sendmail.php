<?php

$to="rushikeshtanpure110@gmail.com";
$subject="hello";
$message="welcome";
$email="jobtalk12@gmail.com";
$header="Form $email";
if(mail($to,$subject,$message,$header)){
    echo "hello";
}
else{
    echo "error";
}
?>