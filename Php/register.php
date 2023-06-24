<?php
require '../Html/config.php';

  if(isset($_POST['signup'])){
	  $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $bmi = $_POST['bmi'];
	$password = $_POST['password'];

    $sql = "insert into users(username,firstname,lastname,email,mobile,gender,dob,bmi,password) values ('$username','$firstname','$lastname','$email','$mobile','$gender','$dob','$bmi',md5('$password'))";
    if($conn->query($sql)===TRUE){
      echo'<script>alert("User added")</script>';
		header('location: ../Html/user.php');
    }
    else{
      echo'<script>alert("signup error !")</script>';

  }
}

$conn->close();
?>
