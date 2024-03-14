session_start();
if(isset($_SESSION['AdminName'])&&isset($_SESSION['Password']))
{
    
}
else
{
    header("Location: admin-dash.html");//admin login page link
    exit();
}