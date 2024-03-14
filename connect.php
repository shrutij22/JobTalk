<?php
$a= mysqli_connect("localhost","root","","jobdatabase");
if(!$a)
{
    echo "<script>alert('Connection not done')</script>";
}
else{
echo "";
}
if(isset($_POST['submit']))
{
    $b= $_POST['Fullname'];
    $c= $_POST['Username'];
    $d= $_POST['DOB'];
    $e= $_POST['Email'];
    $f= $_POST['Phoneno'];
    $g= ($_POST['Password']);
    $q=" INSERT INTO `register` (`Fullname`, `Username`, `DOB`, `Email`, `Phoneno`, `Password`) VALUES ('$b', '$c', '$d', '$e', '$f', '$g')" ;
     $res= mysqli_query($a,$q);
if($res==1)
{
	echo "<script>alert('Record  Inserted')</script>";
    header("location:userdash.php");
}
else
{
	echo "<script>alert('Not Inserted ! Please Change your username or Email')</script>";
}
}
?>