<?php 
include("connect.php");
?>
    <input type="hidden" value="<?php echo $_GET['id']; ?>" name="JobID">
<html>    
<h1><u>JOBS</u></h1>
<h2>Get Hired Today!</h2>

<link rel="stylesheet" href="jobpage.css">
<form method="post" action="userapply.php">
<nav class="navbar">
        <h2 class="navbar-logo"><a href="#">JOBTALK</a></h2>
        <div class="navbar-menu">
            <a href="userdash.php">Home</a>
            </div>
            <div class="menu-toggle">
            <span class="bar"></span> 
        </div>
</nav>
<header>
<?php

	//include("conndb2.php");
	
	$sql="SELECT * FROM `postjob` order by CompanyName desc ";
	$r1=mysqli_query($a,$sql);
	//echo "Query Excuted";
	
	while($row=mysqli_fetch_assoc($r1))
	{
?>

<!-- <div id="current_date"><p>
    <script> 
        date=new Date();
        year=date.getFullYear();
        month=date.getMonth()  +1;
        day=date.getDate();
        document.getElementById("current_date").innerHTML = day +"/" + month + "/" +year;
            
        </script> -->

    <div class="card">
        <div class="container">

         <h3 style="color:red;"><u>Profession:</u> <?php echo $row['jobtitle']; ?></h3>
         <h4><li>Experirence: <?php echo $row['Experience']; ?></h4>
         <h4><li>Location: <?php echo $row['Address']; ?></h4>
         <h4><li>Salary:  <?php echo $row['salary']; ?></h4>
         <h4><li>Job Description:<?php echo $row['JobDesc']; ?></h4>

         <div class="button">
            <p align="right">
          <input type="submit" value="Apply Now!" name="submit">
    </p>
        </div>
        </div>
    </div>
    </header>

    <?php } ?>
    <br> <br> <br>
</html>