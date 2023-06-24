<?php

session_start();

if(!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true){
    header("location: admin.php");
    exit;
}

?>

<html>

<head>
	<meta name="viewport" content="with-device-widdth,initial-scale=1.0">
	<title>
		Login
	</title>
	<link rel="stylesheet" href="../Css/welcome.css">
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
					<li><a href="Home.html">HOME</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					<li><a href="register.php">SIGNUP</a></li>
					<li><a href="Contact.html">CONTACT</a></li>
					<li><a href="About.html">ABOUT</a></li>
				</ul>
			</div>
		</nav>
		<center>
			<h1><font size="50px" color= "#008000">Welcome</font></h1>
            <?php
				
                echo "welcome to Admin" . $_SESSION['admin'];
                if(isset($_SESSION['success'])){
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION['success'];?>
                        </div>
                    <?php
                    unset($_SESSION['success']);
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
            
		</center>

        <?php
            require '../Html/config.php';
            
            $sql = "SELECT username, email, mobile, nic FROM admins WHERE username='".$_SESSION['username']."'";

            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) == 1) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
					<div class = "box">
					
                    <h1>Username: <?php echo $row['username'];?></h1>
                    <h1>Email: <?php echo $row['email'];?></h1>
                    <h1>Mobile Number: <?php echo $row['mobile'];?></h1>
					<h1>NIC: <?php echo $row['nic'];?></h1>
					</div>
                    <?php
                }
                
            }
            else{
                echo "No User Found";
            }
        ?>
		<br>
<br>
<button class="submit-btn" type="button" name ="button"><a href ="updateadmin.php">Edit Profile</button></a>

<br>

<br>
<br>

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