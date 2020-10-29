<?php
session_start();
if (!isset($_SESSION['user'])){
    header('location:index.php');
}
if (isset($_GET['logoutbtn'])){ 
	session_destroy();
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>Login</title>
		<!-- CSS -->
		<link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
		<link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="../assets/css/app.css" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
		<link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
    </head>
    
	<body class="bg-dark-lighter">

		<!-- HEADER -->	
			<!-- NAVBAR -->
			<nav class="navbar navbar-dark navbar-expand-md px-4 bg-dark">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<h5>Login App</h5>
					</a>
                </div>    
            </nav>
            <!-- END OF NAVBAR-->

			<!-- Main section -->
			<div class="section bg-dark-lighter">
				<div class="container text-center">
					<h3 class="d-block p-2 display-4 text-success text-center">You Are Logged In</h2>
					<!-- Logout trigger -->
					<div class="mx-auto p-5 bg-dark-lighter mt-5" style="width: 200px;">
						<form method="get" enctype="multipart/form-data">
							<input type="submit" class="mx-auto btn bg-dark-lighter btn-danger" name="logoutbtn" value="Log Out" />
						</form>
					</div>
				</div>
			</div>
		<!-- END OF HEADER -->

		<!-- Footer -->
		<footer>
			<div class="section bg-dark">
				<div class="container text-center">
					<h3>Login App</h3>
					<ul class="list-horizontal-unstyled icon-lg margin-top-30">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
					<p class="margin-top-20">&copy; 2020 Login App, All Rights Reserved.</p>
				</div>
			</div>
		</footer>

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="../assets/plugins/jquery.min.js"></script>
		<script src="../assets/plugins/plugins.js"></script>
        <script src="../assets/js/functions.js"></script>
        
	</body>
</html>