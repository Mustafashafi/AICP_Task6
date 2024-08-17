<?php
require_once("connection.php");

// Check if a search query is submitted
$query = "SELECT * FROM jobs";

$result = mysqli_query($con, $query);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PHPJabbers.com | Free Job Agency Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="index.php" class="logo">
									<span class="fa fa-briefcase"></span> <span class="title">Job Agency Website</span>
								</a>

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

			<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.php">Home</a></li>

						<li><a href="#" class="active">Buyer</a></li>
                        <li><a href="index1.php" class="active">Seller</a></li>

						
						
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Jobs</h1>

							<div class="image main">
								<img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
							</div>


							<!-- Jobs -->
							<section class="tiles">
								
							
								
								
                                <?php if(mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) { ?>
								<article class="style4">
									<span class="image">
										<img src="images/product-4-720x480.jpg" alt="" />
									</span>
									<a href="job-details.php">
										<h2><?php echo $row['description']; ?></h2>
										
										<p><strong>Salary : <?php echo $row['job_salary']; ?>$</strong></p>

										
		                                	<i>Job Title : <?php echo $row['job_title']; ?></i>
                                         	<i>Experience : <?php echo $row['experience']; ?></i>
                                         	
										
									</a>
								</article>
                                <?php } 
} else { ?>
    <li>No Jobs found</li>
<?php } ?>
							

								
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>