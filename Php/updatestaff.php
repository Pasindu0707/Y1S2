<?php





session_start();
require '../Html/config.php';



if(isset($_POST['update'])){
$username = $_POST['username'];
$email = $_POST['email'];




}

$sql = "UPDATE staff SET username='$username', email='$email'.";

if($conn->query($sql) === TRUE){



session_start();
$_SESSION['status'] = "Case Updated Successfully.";
header('Location:../Html/Swelcome.php');
}
else {
$_SESSION['fail'] = "Case Updation Unsuccessful.";
header('Location:../Html/Swelcome.php');
}



$conn->close();
?>		
