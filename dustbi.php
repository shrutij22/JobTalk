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
            <a href="userdash.html">Home</a>
            <a href="jobpage.html">&nbsp&nbsp&nbspJobs</a>
            <a href="#companies"> &nbsp &nbsp &nbspCompanies</a>
            <a href="#about us">&nbsp&nbsp&nbsp About us</a>
            <a href="login.html"> &nbsp&nbsp&nbsp Sign-Out</a>
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
        <a href="candidatedetails.html"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Create Profile </a>
        <br>
        <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;Applied Jobs</a>
        <br>
        <a href="#"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;View Status</a>
        
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
	
	$sql="SELECT * FROM `postjob` order by CompanyName desc limit 2 ";
	$r1=mysqli_query($a,$sql);
	//echo "Query Excuted";
	
	while($row=mysqli_fetch_assoc($r1))
	{
?>


    <div class="card">
        <div class="container">
            
        <h2>Company Name:<?php echo $row['CompanyName']; ?></h2> <br>
         <h3 style="color:red;">Profession: <?php echo $row['jobtitle']; ?></h3>
         <h3 style="color:red;">Experirence: <?php echo $row['Experience']; ?></h3>

         <div class="button">
         <p align="right">
          <input type="submit" value="Apply Now!" name="submit"></p>
        </div>
        </div>
    </div>

    <?php } ?>
    <br> <br> <br>
   
</div>

<!-- TOP COMPANIES 

<section class="top-companies">
    <h2><u>TOP</u> <u>COMPANIES</u></h2>
    <div class="row">
        <div class="top-col">
            <h3>Microsoft</h3>
            <p>Hello</p>
        </div>
        <div class="top-col">
            <h3>TCS</h3>
            <p>Hello</p>
        </div>
        <div class="top-col">
            <h3>Infosys</h3>
            <p>Hello</p>
        </div>
    </div>
</section> -->


</body>
</html>