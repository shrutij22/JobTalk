<?php 
include("connect.php");
?>
<h1><center>Post Job details </center></h1>
<h1 style="background-color:white;">
<div class="scroll">
<table BORDER="2" cellpadding="15" width="10" >
<tr>
	<th>Company Name</th>
	<th>Job Title</th>
	<th>Job Description</th>
	<th>Email</th>
	<th>Experience</th>
	<th>Address</th>
	<th>Job Type</th>
	<th>Salary</th>
    <th>Gender</th>
    <th>Qualification</th>
    <th>Applicaton dead line</th>
	<th>Delete</th>
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
	height:500px;
}

</style>

<?php 
//include("conndb2.php");
?>
<?php

	//include("conndb2.php");
	
	$conn="SELECT * FROM `postjob`";
	$r1=mysqli_query($a,$conn);
	//echo "Query Excuted";
	
	while($row=mysqli_fetch_assoc($r1))
	{
	?>
	<tr>
	<td><?php echo $row['CompanyName']; ?></td>
	<td><?php echo $row['jobtitle']; ?></td>
	<td><?php echo $row['JobDesc']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['Experience']; ?></td>
	<td><?php echo $row['Address']; ?></td>
    <td><?php echo $row['Jobtype']; ?></td>
    <td><?php echo $row['salary']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['Qualification']; ?></td>
    <td><?php echo $row['deadlinedate']; ?></td>
	<td><a href = "postjobtabledelete.php?rn=<?php echo $row['CompanyName'];?>">delete</a></td>
	</tr>

<?php
	}
?>