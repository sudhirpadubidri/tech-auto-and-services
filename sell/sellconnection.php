<?php
$sellconn=mysqli_connect("localhost:3308","root","","selldb");
if(!$sellconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>
