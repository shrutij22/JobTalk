<?php
session_start();
//print_r($_SESSION);
if(count($_SESSION)==0){

    echo "<script>window.location.href='login.html';</script>";
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userdash.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Job Portal Website</title>

                                     
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
    }
    </script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <h2 class="navbar-logo"><a href="#">JOBTALK</a></h2>
        <div class="navbar-menu">
            <a href="userdash.php">Home</a>
            <a href="jobpage.php">&nbsp&nbsp&nbspJobs</a>
            <a href="#about us">&nbsp&nbsp&nbsp About us</a>
            <a href="aboutus.html">&nbsp&nbsp&nbsp Reviews</a>
            <a href="logout.php"> &nbsp&nbsp&nbsp Sign-Out</a>
        </div>
        <div class="menu-toggle">
           <span class="bar"></span> 
            <span class="bar"></span> 
            <span class="bar"></span> 
        </div>
    </nav>
    <!-- header -->
    <header>
        <h1 class="header-title">
            FIND YOUR <br> <span>PERFECT JOB</span>
        </h1>
    </header>
    <!-- search -->
    <div class="search-wrapper">
        <div class="search-box">
            <div class="search-card">
                <input class="search-input" type="text" placeholder="Job title or keywords">
                <button class="search-button">Search</button> 
            </div>
        </div>
    </div>
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br>
        <a href="candidatedetail.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Create Profile </a>
        <br>
        <a href="candidatedetailsTable.php"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;Applied Jobs</a>
        <br>
        <a href="registertable.php"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;View Status</a>
        <br>
        <a href="admin-login.html"><i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp;&nbsp;Admin Login</a>
        <br>
        <a href="feedback.html"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;Feedback</a>
        
      </div>
      
      <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>

<!-- Jobs -->
    <h1><u>LATEST</u> <u>JOBS</u></h1>
    <br> <br> <br>
   
    <?php 
include("connect.php");
?>
<?php

	//include("conndb2.php");
	
	$sql="SELECT * FROM `postjob` order by CompanyName limit 2 ";
	$r1=mysqli_query($a,$sql);
	//echo "Query Excuted";
	
	while($row=mysqli_fetch_assoc($r1))
	{
?>

    <div class="card">
        <div class="container">
            <br>
         <h3 style="color:red;">Profession: <?php echo $row['jobtitle']; ?></h3><br>
         <h4>Experirence: <?php echo $row['Experience']; ?></h4><br>
         <h4>Location: <?php echo $row['Address']; ?></h4><br>
         <h4>Salary:  <?php echo $row['salary']; ?></h4><br>
         <h4>Job Description:<?php echo $row['JobDesc']; ?></h4>

         <div class="button">
            <p align="right">
          <a href="candidatedetail.php?id=<?php echo $row['JobID']; ?>">Apply Now</a>
    </p>
        </div>
        </div>
    </div>

    <?php } ?>
    <br> <br> <br>
   
</div>

<section class="companies">
    <h1><U>TOP</U> <U>COMPANIES</U></h1>

    <div class="row">
        <div class="company-col">
            <img src="microsoft.jpg" alt="microsoft" style="width:100%">
            <div class="layer">
                <h3>Microsoft</h3>
            </div>
        </div>
        <div class="company-col">
            <img src="TCS.jpg" alt="tcs" style="width:100%">
            <div class="layer">
                <h3>Tata Consultancy Services</h3>
            </div>
        </div>
        <div class="company-col">
            <img src="Tech.jpg" alt="tech" style="width:100%">
            <div class="layer">
                <h3>Tech Mahindra</h3>
            </div>
        </div>
        <div class="company-col">
            <img src="cognizant3.jpg" alt="cognizant" style="width:100%">
            <a href=popup.html>
            <div class="layer">
                <h3>Cognizant</h3>
            </div>
        </div>
        <div class="company-col">
            <img src="lnt.jpg" alt="lnt" style="width:100%">
            <div class="layer">
                <h3>L&T Infotech</h3>
            </div>
        </div>
        <div class="company-col">
            <img src="oracle.jpg" alt="oracle" style="width:100%">
            <div class="layer">
                <h3>Oracle</h3>
            </div>
        </div>
    </div>
</section>

</body>
</html>