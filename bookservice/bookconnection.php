<?php
$bookconn=mysqli_connect("localhost:3308","root","","bookservicedb");
if(!$bookconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>