<?php 
session_start();
include("connect.php");
?>

<h1>Candidate Details</h1>
<br>
<h1 style="background-color:white;">
<div class="scroll">
<table BORDER="1" cellpadding="10" width="200" >
<tr>
	<th>Full Name</th>		
	<th>CompanyName</th>
	<th>Address</th>
	<th>Contact Number</th>
	<th>Date of birth</th>
	<th>Resume</th>
	<th>Company Name</th>

</tr>
</div>
<br>
<style>
<style>
h1{
		font-size:40px;
	}
	table{
		width:100%;
		height: 100%;
		font-size:25px;
	}
	tr:nth-child(even){
		background-color:#f2f2f2;
	}
	tr:hover{
		background-color:#ddd;
	}
	th{
		  padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #06c17c;
          color: white;
	}
.scroll{
	height:500px;
}

</style>

<?php 
//include("conndb2.php");
?>
<?php

	//include("conndb2.php");
	$mail_id = trim($_SESSION['user_email']);
	// $conn="SELECT * FROM `candidatedetails` where Email='$mail_id'";
	$test = "SELECT candidatedetails.FullName, candidatedetails.email, candidatedetails.ContactNo,candidatedetails.dateofbirth,candidatedetails.file,candidatedetails.address, postjob.CompanyName
	FROM candidatedetails
	INNER JOIN postjob ON candidatedetails.JobID=postjob.JobID   where candidatedetails.email='$mail_id'";
	$r1=mysqli_query($a,$test);
	// print_r($test);
	
	while($row=mysqli_fetch_assoc($r1))
	{

	?>
	<tr>
	<td><?php echo $row['FullName']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['address']; ?></td>
	
	<td><?php echo $row['ContactNo']; ?></td>
	<td><?php echo $row['dateofbirth']; ?></td>
	<td><?php echo $row['file']; ?></td>
	<td><?php echo $row['CompanyName']; ?></td>
	</tr>

<?php
	}
?>