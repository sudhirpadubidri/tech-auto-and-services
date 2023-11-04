<?php
$conn=mysqli_connect("localhost:3308","root","","logindb");
if(!$conn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>