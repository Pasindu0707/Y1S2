<?php

require '../Html/config.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM staff WHERE username='".$username."' AND password=md5('".$password."')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['staff'] = true;
        $_SESSION['success'] = "Logged In Successfully.";
        header('Location: ../Html/Swelcome.php');
      } else {
        $_SESSION['fail'] = "Login Successful. Invalid Login Details.";
      }
      
      mysqli_close($conn);
}


