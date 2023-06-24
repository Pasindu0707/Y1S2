<html>

<head>
	<meta name="viewport" content="with-device-widdth,initial-scale=1.0">
	<title>
		Login
	</title>
	<link rel="stylesheet" href="../Css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

</head>

<body>

	<!--starter-->
	<div class="header">

		<nav>
			<a href="home.html"><img src="../Img/Logo.png" width="150px" height="100px" alt="logo">
				<h4>Health Hanger</h4>
			</a>
			<div class="links">
				<ul>
					<li><a href="Home.html">HOME</a></li>
					<li><a href="staff.php">LOGIN</a></li>
					<li><a href="register.php">SIGNUP</a></li>
					<li><a href="Contact.html">CONTACT</a></li>
					<li><a href="About.html">ABOUT</a></li>
				</ul>
			</div>
		</nav>
		<?php
			session_start();

			if(isset($_SESSION['status'])){
				?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['status'];?>
					</div>
				<?php
				unset($_SESSION['status']);
			}
			if(isset($_SESSION['fail'])){
				?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_SESSION['fail'];?>
					</div>
				<?php
				unset($_SESSION['fail']);
			}
		?>
		<center>
			
			<form id="login" method="POST" action="../Php/stafflogin.php">
			<br>
			
			<h1>LOGIN</h1>
			<div class ="label">
			
				<label for="name"><b>Enter your Username :</b></label><br>
				<input type="text" name="username" required><br><br>
			</div>
			
			<div class ="label1">
				<label for="name"><b>Password :</b></label><br>
				<input type="password" id="log-pwd" name="password" required><br><br>
				<br>
			</div>
				<input type="submit" name="submit" value="Login" class="submit-btn" id="log-btn">
				<br>
				<h3>Do You haven't any Account ?<br><a href="register.html">Create Account</a></h3>
				<a href="Forget.html">Forget password </a>
			</form>
		</center>
		<!--footer--->
		<hr class="hr">
<section class="footer">
<h4><a href="Feedback.html"class="reg">Give Us a Feedback</a></h4>
<p style="color:white">You are Thankfull If you leave a feedback on us,Thank You!<p>
<div class="socialmedia">
<a href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x">facebook</i></a>
<a href="https://www.instagram.com"><i class="fab fa-instagram fa-2x">Instagram</i></a>
<a href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x">Twitter</i></a>
<a href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x">Google Plus</i></i></a>
<a href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x">Whatsapp</i></a>

 </div>
</section>


</body>

</html>