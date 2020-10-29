<?php
session_start();
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
    
	<body>
        <!-- HEADER -->
		<header>

			<!-- NAVBAR -->
			<nav class="navbar navbar-dark navbar-expand-md px-4 bg-dark">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<h5>Login App</h5>
					</a>
                </div>    
            </nav>
            <!-- END OF NAVBAR-->

            <!-- ERROR ALERTS -->
            <?php if( isset($_SESSION['username_err']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['username_err']; ?></b>
            </div>
            <?php } unset($_SESSION['username_err']);?>

            <?php if( isset($_SESSION['pass_err']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['pass_err']; ?></b>
            </div>
            <?php } unset($_SESSION['pass_err']);?>

            <?php if( isset($_SESSION['fname_err']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['fname_err']; ?></b>
            </div>
            <?php } unset($_SESSION['fname_err']);?>

            <?php if( isset($_SESSION['lname_err']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['lname_err']; ?></b>
            </div>
            <?php } unset($_SESSION['lname_err']);?>

            <?php if( isset($_SESSION['email_err']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['email_err']; ?></b>
            </div>
            <?php } unset($_SESSION['email_err']);?>
            <!-- END OF ERROR ALERTS -->
            
            <!-- SIGN UP SECTION -->
			<div class="d-flex justify-content-center">
                <div class="col-md-4">
                    <h3 class="text-center text-dark">Sign Up</h3>
                    <form action="action.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <input type="text" name="username" value="" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" value="" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="firstname" value="" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" value="" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="" class="form-control" placeholder="Enter E-mail (Fake Email)">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submitinfo" class="btn-lg btn-info bg-white btn-block text-dark font-weight-semi-bold" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END OF SIGN UP SECTION -->

        </header>
        <!-- END OF HEADER -->

        <!-- FOOTER -->
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
        <!-- END OF FOOTER -->

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="../assets/plugins/jquery.min.js"></script>
		<script src="../assets/plugins/plugins.js"></script>
		<script src="../assets/js/functions.js"></script>
        
	</body>
</html>