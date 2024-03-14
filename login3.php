<?php
session_start();

	include("connect2.php");
	
	if(isset($_POST['submit']))
	{
		$Username=$_POST['Username'];
		$Password=$_POST ['Password'];
		echo "<br>";
		$check="SELECT * FROM `register` WHERE Username='$Username' and Password='$Password'";
		$res1=mysqli_query($a,$check);
	//$r=mysqli_num_rows($res1);
		if(mysqli_num_rows($res1)==0)
		{
			echo "<script>alert('Login Unsuccessfully')</script>";
			header("location:login.html");
		}
		else
		{
			echo "<script>alert('Login Successfully');</script>";
		    $id=mysqli_fetch_assoc(mysqli_query($a,"select Email from register where Username='$Username'"))['Email'];
			//echo $id;
			$_SESSION['user_email']=$id;
			header("location:userdash.php");
		}	
	}	
?>