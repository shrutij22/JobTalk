<?php
$a= mysqli_connect("localhost","root","","jobdatabase");
if(!$a)
{
    echo "<script>alert('Connection not done')</script>";
}
else{
echo "";
}
if(isset($_POST['submit']))
{
    $ji= $_GET['jobid'];
    $cn= $_POST['CompanyName'];
    $jt= $_POST['jobtitle'];
    $jd= $_POST['JobDesc'];
    $em= $_POST['email'];
    $ex= $_POST['Experience'];
    $add= $_POST['Address'];
    $jty= $_POST['Jobtype'];
    $of= $_POST['salary'];
    $ge= $_POST['gender'];
    $qu= $_POST['Qualification'];
    $dl= $_POST['deadlinedate'];

    $query="INSERT INTO `postjob`(`jobid`,`CompanyName`, `jobtitle`, `JobDesc`, `email`, `Experience`, `Address`, `Jobtype`, `salary`, `gender`, `Qualification`, `deadlinedate`) VALUES ('$ji','$cn','$jt','$jd','$em','$ex','$add','$jty','$of','$ge','$qu','$dl')" ;
    $res1= mysqli_query($a,$query);
if($res1==1)
{
	echo "<script>alert('Record Inserted')</script>";
}
else
{
	echo "<script>alert('Not Inserted')</script>";
}
}
?>
