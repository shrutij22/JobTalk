/*admin dashboard using session*/
<?php
session_start();
if(isset($_SESSION['Admin Name']))
{
    
}
else
{
    header("Location: admin-dash.html");  //admin login page link
    exit();
}
?>