<html>

<head>
	<title>
		Login
	</title>
	<link rel="stylesheet" href="../css/docprofile.css">
	<link rel="stylesheet"
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

</head>
<body>

	<!--starter-->
	<div class="header">

		<nav>
			<a href="home.html"><img src="../img/Logo.png" width="150px" height="100px" alt="logo">
				<h4>Health Hanger</h4>
			</a>
			<div class="links">
				<ul>
					<li><a href="home.html">HOME</a></li>
					<li><a href="Login.html">LOGIN</a></li>
					<li><a href="index.html">SIGNUP</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a href="About.html">ABOUT</a></li>
				</ul>
			</div>
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
			<br>
			<br>
			<br>
			
			<form id="login" method="POST" action="doclogin.php">
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
			</form>
		<br>
			<br>
			<br>
			
		</center>
		<!--footer--->
		<hr class="hr">
		<section class="footer">

			<h4><a class="reg">Give Us a Feedback</a></h4>
			<p style="color:black">You are Thankfull If you leave a feedback on us,Thank You!
			<p>
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