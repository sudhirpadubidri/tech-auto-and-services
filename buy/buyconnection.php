<?php
$buyconn=mysqli_connect("localhost:3308","root","","buydb");
if(!$buyconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>