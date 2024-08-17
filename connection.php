<?php 
session_start();

$con = mysqli_connect("localhost","root","","task6");
if(mysqli_connect_error()){
    echo "connection failed";
}


?>