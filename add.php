<?php
require_once('connection.php');

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
   
   

  
    $check_query = "SELECT * FROM `users`";
    $result = mysqli_query($con, $check_query);
    $query = "INSERT INTO `users`VALUES('$name', '$message')";
        
        if(mysqli_query($con, $query)){
            header('location:index2.php');
        } else {
            $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible" style="position:fixed;top:50px;left:420px">
                Task Record Uploading Failed!
            </div>';
            header('location:recruitor.php');
        }
    }

?>
