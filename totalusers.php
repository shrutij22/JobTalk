<?php

$a= mysqli_connect("localhost","root","");
mysql_select_db("database",$a)

    $result = mysqli_query("SELECT * FROM `register`", $a);
    $num_rows=mysqli_num_rows($result);

       echo "$num_rows Rows\n";

?>
