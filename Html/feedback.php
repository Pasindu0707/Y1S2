<?php
include_once 'config.php';

?>
<?php
		$Email=$_POST['Email'];
		$UserID=$_POST['UserID'];
		$F_Description=$_POST['F_Description'];
		
		$sql="INSERT INTO feedback(Email,UserID,F_Description) VALUES('$Email','$UserID','$F_Description')";
		
			if($conn->query($sql))
			{
				header("Location:Home.html");
			}
			else
			{
				echo "<script>alert('error')</script>";
			}
	
$conn-close();

?>