<?php 
include("connect.php");
?>
<h1><center>Candidate Details</center></h1>
<h1 style="background-color:white;">
<div class="scroll">
<table BORDER="1" cellpadding="10" width="200" >
<tr>
	<th>Full Name</th>
	<th>Email</th>
	<th>Address</th>
	<th>Contact Number</th>
	<th>Date of birth</th>
	<th>Resume</th>
</tr>
</div>
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
	height:720px;
}

</style>

<?php 
//include("conndb2.php");
?>
<?php

	//include("conndb2.php");
	
	$conn="SELECT * FROM `CandidateDetails`";
	$r1=mysqli_query($a,$conn);
	//echo "Query Excuted";
	
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
<?php
	}
?>