<?php
include "connect.php";
?>
<!DOCTYPE html>

<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard |</title>-->
    <link rel="stylesheet" href="admindb.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">J O B T A L K</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admindb.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="delete_user1.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Registered Users</span>
          </a>
        </li>
        <li>
          <a href="postjob.html">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Post Job </span>
          </a>
        </li>
        <li>
          <a href="postjobtable.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Post Job Details</span>
          </a>
        </li>
        <li>
          <a href="cd1.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Applied Users</span>
          </a>
        </li>

        <li>
          <a href="registertable.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Update Status</span>
          </a>
        </li>

        <li class="log_out">
          <a href="admin-logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">ADMIN</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Active Users</div>
            <?php
            $query = "SELECT * fROM register ORDER BY Username";
            $query_run=mysqli_query($a,$query);

            $row=mysqli_num_rows($query_run);

            echo '<h1>'.$row.'</h1>';
            ?>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
       

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Job Posts</div>
            <?php
            $query = "SELECT * fROM postjob ORDER BY JobID";
            $query_run=mysqli_query($a,$query);

            $row=mysqli_num_rows($query_run);

            echo '<h1>'.$row.'</h1>';
            ?>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic"> Applied Users</div>
            <?php
            $query = "SELECT * fROM candidatedetails ORDER BY JobID";
            $query_run=mysqli_query($a,$query);

            $row=mysqli_num_rows($query_run);

            echo '<h1>'.$row.'</h1>';
            ?>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
       
          </ul>
        </div>
      </div>
    </div>
    
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

