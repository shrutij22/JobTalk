<?php
include("connect2.php");
$CompanyName= $_GET['CompanyName'];
$query1="DELETE FROM `postjob` WHERE CompanyName='$CompanyName'";

$data=mysqli_query($a,$query1);

if($data)
{
    echo "<script>alert('Record deleted successfully')</script>";
    header("refresh:0;url=postjobtabledelete.php");
}
else
{
    echo "<script>alert('Failed to delete')</script>";
}
?>