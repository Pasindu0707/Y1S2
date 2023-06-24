<?php
session_start();

if(!isset($_SESSION['doctor']) || $_SESSION['doctor']!==true)
{
	header("location:docindex.php");
	exit;
}
?>
<html>
	<head>
		<meta name="viewport" content="with-device-widdth,initial-scale=1.0">
		<title>
			Health checkup and diet Planning
		</title>
		<link rel="stylesheet" href="../Css/docprofile.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

		</head>
	<body>
	
<!--starter-->
		<div class="header">
			
			<nav>
				<a href="home.html"><img src="../Img/Logo.png" width="150px" height="100px" alt="logo">
				<h4>Health Hanger</h4></a>
				<div class="links">
					<ul>
						<li><a href="Home.html">HOME</a></li>
						
						<li><a href="Contact.html">CONTACT</a></li>
						<li><a href="about.html">ABOUT</a></li>
		</div>
		</div>
		<div>
		
<button class = "button" ><a class="a" href='logout.php'>Log Out</a></button>

<button class = "button" ><a class="a" href='patient.html'>Patients</a></button>

<button class = "button" ><a class="a" href='time.html'>Time Table</a></button>

<button class = "button" ><a class="a" href='Q&A.html'>Q&A</a></button>


<div class="card">

   <img src="../Img/login.png" height=200px, width=200px style="margin-left:43% ; border-radius:50%">

  
<center>
<?php
	echo "welcome".$_SESSION['username'];
	if (isset($_SESSION[' success'])){
?>
	<?php echo $_SESSION[ 'success'];?>
<?php
unset($_SESSION[" success" ]);
}
if (isset($_SESSION['fail'])){
?>
<?php
echo $_SESSION['fail'];?>

<?php
unset ($_SESSION['fail']);
}
?>

</center>
<?php
require 'config.php';

$sql= "SELECT username, email, specialization,mobile FROM docotor WHERE username='".$_SESSION['username']."'";
$result = mysqli_query ($conn, $sql) ;
	if (mysqli_num_rows($result) == 1) {
		while($row =mysqli_fetch_assoc($result)) {
		?>
	<p style="margin-left:43%"><i class="fa fa-user info"></i><?php echo $row['username'];?></p><br>
	<p style="margin-left:43%"><i class="fa fa-envelope"></i><?php echo $row['email'];?></p><br>
	<p style="margin-left:43%"><i class="fa fa-user-md"></i> <?php echo $row['specialization'];?></p><br>
	<p style="margin-left:43%"><i class="fa fa-phone info"></i> <?php echo $row['mobile'];?></p><br>
<?php }
}
else{
echo "No User Found";
}
?>


		
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


			
		

			