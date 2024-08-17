<?php
require_once("connection.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>



	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Add Job</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css1/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css1/style.css" />

</head>

<body>

	<div id="booking" class="section" style="background-image: url('images/header-slide.jpg');height:600px;">
	
		<div class="section-center">
			
			<div class="container">
			
				<div class="row">
					<div class="booking-form">
						
						<div class="form-header">
						
				
							
				
						</div>
						
						<form action="upload_new_job.php" method="POST" enctype="multipart/form-data">
    <br><br><br>
  
    <h1 style="color:white;margin-left:180px;font-weight:bold;font-size:40px">Post A Job</h1>
    <a href="index1.php" style="color:white;position:fixed;left:50px;top:120px;">
        <i class="fa fa-long-arrow-left" aria-hidden="true" style="font-size:40px"></i>
    </a>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <span class="form-label">Job title</span>
                <input class="form-control" type="text" placeholder="Enter ob title" name="job_title" id="job_title" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <span class="form-label">Job Salary</span>
                <input class="form-control" type="number" placeholder="Enter Job salary" name="job_salary" id="job_salary" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <span class="form-label">Candidate Experince</span>
                <input class="form-control" type="number" placeholder="Enter candidate experince" name="experience" id="experience" required>
            </div>
        </div>
    </div>
    <div class="col-12">
            <div class="form-floating"><span class="form-label">Enter job description</span>
                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px" name="message"></textarea>
                
            </div>
        </div>
    <br>
    <div class="form-btn">
        <button class="submit-btn" name="addjob">Post Now</button>
    </div>
</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>