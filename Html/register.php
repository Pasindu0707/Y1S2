<!DOCTYPE html>

<head>
		
		<script src="../Js/date.js"></script>
		<link rel="stylesheet" href="../Css/style.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
		<title>
			Profile page
		</title>
<!--starter-->
<div class="header">
			
		<nav>
			<a href="home.html"><img src="../Img/Logo.png" width="150px" height="100px" alt="logo">
				<h4>Health Hanger</h4></a>
				<div class="links">
					<ul>
					<li><a href="Home.html">HOME</a></li>
					<li><a href="user.php">LOGIN</a></li>
					<li><a href="register.php">SIGNUP</a></li>
					<li><a href="Contact.html">CONTACT</a></li>
					<li><a href="About.html">ABOUT</a></li>
					</ul>
				</div>
		</nav>
</head>




<body class="register-page">


<div class="icon-bar">
    <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/login" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="https://www.google.com/intl/si/gmail/about/" class="google"><i class="fa fa-google"></i></a>
    <a href="https://www.linkedin.com/uas/login" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
    
	<div class="wrapper">
	      <h2>Register User</h2>
	<form action="../Php/register.php" method="post">
		<div class="inputBox">
			 
			    <input type="text" id="username" name="username" placeholder="Username" required>
		</div>
		<div class="inputBox">
			 
			    <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
		</div>
		<div class="inputBox">
			 
			    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>
		</div>
		<div class="inputBox">
		
			    <input type="email" id="email" name="email" placeholder="EMail Address"  required>
		</div>
		<div class="inputBox">
			  
			    <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" required>
		</div>
		<div class="radio-toolbar">
			Gender:-
				<input type="radio" name="gender" value="M" /><label>Male</label>
				<input type="radio" name="gender" value="F" /><label>Female</label>
		</div><br>
			
			
		<div class="inputBox">
			<input type="date" name="dob" class="txtDate">
		</div>
		<div class="inputBox">
			 
			    <input type="text" id="bmi" name="bmi" placeholder="BMI" required>
		</div> 
		
		
		<div class="inputBox">
			 
			    <input type="password" id="password" name="password" placeholder="User Password" required>
		</div>
		<div class="inputBox">
			    <button type="submit" name="signup" class="btn">Sign Up</button>
		</div>
	</div>	
	</form>	
	 
</body>

<!--footer--->
<hr class="hr">
		<section class="footer">

			<h4><a class="reg">Give Us a Feedback</a></h4>
			<p style="color:black">You are Thankfull If you leave a feedback on us,Thank You!
			<p>

			<div class="icons">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-google-plus"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-linkedin"></i>
			</div>
		</section>
</html>