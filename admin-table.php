<?php 
include("connect.php");
?>
<h1>Registered Users Info For ADMIN </h1>
<br>
<h1 style="background-color:white;">
<div class="scroll" >
<table BORDER="1" cellpadding="10" width="200" >
<tr>
	<th>Full Name</th>
	<th>Username</th>
	<th>DOB</th>
	<th>Email</th>
	<th>PhoneNo</th>
	<th>Password</th>
	<th>edit</th>
	<th>delete</th>
	
</tr>
</div>
<br>
<style>
.scroll{

	height:700px;
	overflow:scroll;
	width:900px;
}
</style>

<?php 
//include("conndb2.php");
?>
<?php

	//include("conndb2.php");
	
	$conn="SELECT * FROM `register`";
	$r1=mysqli_query($a,$conn);
	//echo "Query Excuted";
	
	while($row=mysqli_fetch_assoc($r1))
	{
	?>
	<tr>
	<td><?php echo $row['FullName']; ?></td>
	<td><?php echo $row['Username']; ?></td>
	<td><?php echo $row['DOB']; ?></td>
	<td><?php echo $row['Email']; ?></td>
	<td><?php echo $row['Phoneno']; ?></td>
	<td><?php echo $row['Password']; ?></td>
	</tr>

<?php
	}
?>