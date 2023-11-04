<?php
$accconn=mysqli_connect("localhost:3308","root","","accessoriesdb");
if(!$accconn){
    echo "<script>alert('Cannot connect to the database');</script>";
    exit;
}
?>
