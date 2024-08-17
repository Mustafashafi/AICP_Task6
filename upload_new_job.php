<?php
require_once("connection.php");

if(isset($_POST['addjob'])){
    $job_title = $_POST['job_title'];
    $job_salary = $_POST['job_salary'];
    $experience = $_POST['experience'];
    $message = $_POST['message'];
   

    // Check if the book ID already exists
    $check_query = "SELECT * FROM `jobs` WHERE `job_title` = '$job_title'";
    $result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($result) > 0){
        // Book ID already exists, display message
        $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible" style="text-align:center;">
                               Book ID already exists!..
                            </div>';
        header("location:addjob.php");
        exit; // Stop execution
    }

  
        // If the book ID is unique, proceed with insertion
       
            $query = "INSERT INTO `jobs` VALUES ('$job_title','$job_salary','$experience','$message')";

            if(mysqli_query($con, $query)){
                // Book inserted successfully
                $_SESSION['message'] = '<div class="alert alert-success alert-dismissible" style="text-align:center;">
                                       Book uploaded Successfully!.. 
                                    </div>';
                header("location:index.php");
            }else{
                // Failed to insert book
                $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible" style="text-align:center;">
                                       Book Failed to upload Successfully!.. 
                                    </div>';
                                    
            }
        }else{
            // Failed to move uploaded file
            $_SESSION['message'] = '<div class="alert alert-danger alert-dismissible" style="text-align:center;">
                                   Book not uploaded Successfully!.. 
                                </div>';
        }
   

?>
