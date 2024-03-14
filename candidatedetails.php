<?php
$a= mysqli_connect("localhost","root","","jobdatabase");
if(!$a)
{
    echo"<script>alert('Connection Not Done')</script>";
}
else{
echo "";
}
if(isset($_POST['submit']))
{
  $ji=$_POST['JobID'];
    $fn= $_POST['FullName'];
    $em= trim($_POST['email']);
    $add= $_POST['address'];
    $cn= $_POST['ContactNo'];
    $dob= $_POST['dateofbirth'];
    $file= $_POST['file'];
    $check = "SELECT * FROM  `candidatedetails` where `email`= '$em' and `JobID` = '$ji'";
    $check_res= mysqli_query($a,$check);
    if(mysqli_fetch_assoc($check_res)){
      print(mysqli_fetch_assoc($check_res));
 echo "<script>alert('Already apply for this job')</script>";
    }else{
      print('absent');
           $query= "INSERT INTO `candidatedetails`(`JobID`,`FullName`, `email`, `address`, `ContactNo`,`dateofbirth`,`file`) VALUES ('$ji','$fn','$em','$add','$cn','$dob','$file')" ;
      $res= mysqli_query($a,$query);
          if($res==1)
          {
            echo ' <script>alert("Records Inserted")</script>';
            header("location:userdash.php");
          }
          else
          {
            echo "<script>alert('Not Inserted')</script>";
            header("location:userdash.php");
          }
      
    }
    

}
?>
