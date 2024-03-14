<?php
include("connect2.php");
$Username= $_GET['rn'];
$query1="DELETE FROM `register` WHERE Username='$Username'";

$data=mysqli_query($a,$query1);

if($data)
{
    echo "<script>alert('Record deleted successfully')</script>";
    header("refresh:0;url=delete_user1.php");
}
else
{
    echo "<script>alert('Failed to delete')</script>";
}
?>