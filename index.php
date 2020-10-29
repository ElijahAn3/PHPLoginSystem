<?php
session_start();
if(isset($_SESSION['user'])){
  header('location:logged_in.php');
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
		<header>

			<!-- NAVBAR -->
			<nav class="navbar navbar-dark navbar-expand-md px-4 bg-dark">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<h5>Login App</h5>
					</a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light font-weight-semi-bold" href="sign_up.php">Sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- END OF NAVBAR-->

            <!-- PHP LOGIN ERROR ALERTS -->
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

            <?php if( isset($_SESSION['loginfail']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['loginfail']; ?></b>
            </div>
            <?php } unset($_SESSION['loginfail']);?>

            <?php if( isset($_SESSION['passfail']) ){ ?>
            <div class="alert alert-<?= $_SESSION['type']; ?> alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b><?= $_SESSION['passfail']; ?></b>
            </div>
            <?php } unset($_SESSION['passfail']);?>
            <!---->
            
            <!-- Main section -->
			<div class="section bg-dark-lighter">
				<div class="container text-center font-weight-lighter">
                    <h3 class="d-block display-4 text-danger text-center">You Are Not Logged In</h3>
				</div>
            </div>
            

             <!-- Login modal trigger -->
            <div class="mx-auto p-5" style="width: 200px;">
                <button class="btn-lg btn-dark-lighter bg-dark-lighter p-4 text-light" data-toggle="modal" data-target="#loginModal">Log in</button>
            </div>
            <!-- Login modal -->
            <div class="modal" id="loginModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark">Log in</h5>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-dark-lighter">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <a href="sign_up.php" class="float-right text-grey">New user?</a>
                                    <label for="username">Username</label>
                                    <input type="text" name="userlogin" placeholder="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="userpass" placeholder="Password" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="mx-auto btn btn-success bg-dark-lighter text-light font-weight-normal" name="loginbtn" value="Log In">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</header>
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