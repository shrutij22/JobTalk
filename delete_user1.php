<?php 
include("connect2.php");
?>
<br>
<h1><center>Registered Users Details</center> </h1>

<div class="scroll" >
<table BORDER="1" cellpadding="10" width="500" >
<tr>
	<th>Full Name</th>
	<th>Username</th>
	<th>DOB</th>
	<th>Email</th>
	<th>Phoneno</th>
	<th>Password</th>
    <th>Operation</th>
</tr>
</div>
<br>
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
    <td><a href = "delete1.php?rn=<?php echo $row['Username'];?>">delete</a>
	<!-- --<input type ="submit" name="delete" id="delete"></td></a>-->
	</td>
	</tr>
      

<?php
	}
?>