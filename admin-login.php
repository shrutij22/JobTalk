<?php
session_start();
	include("connect2.php");
	if(isset($_POST['submit']))
	{
		$AdminName=$_POST['AdminName'];
		$Password=$_POST ['Password'];
		echo "<br>";
		$check="SELECT * FROM `admin_login` WHERE  AdminName ='$AdminName' and Password='$Password'";
		$res1=mysqli_query($a,$check);
	    //$r=mysqli_num_rows($res1);
		if(mysqli_num_rows($res1)==0)
		{
			echo "<script>alert('Login Unsuccessfully')</script>";
		}
		else
		{
			echo "<script>alert('Login Successfully')</script>";
			header("location:admindb.php");
		}	
	}	
?>
