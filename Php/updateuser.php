<?php


        
        session_start();
        require '../html/config.php';

        if(isset($_POST['update'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $bmi = $_POST['bmi'];
            $mobile = $_POST['mobile'];

            
        }    
        
        $sql = "UPDATE users SET username='$username', email='$email', bmi='$bmi', mobile='$mobile'."'";
        
        if($conn->query($sql) === TRUE){

            session_start();
            $_SESSION['status'] = "Case Updated Successfully.";
            header('Location:../Html/Uwelcome.php');
        }
        else {
            $_SESSION['fail'] = "Case Updation Unsuccessful.";
            header('Location:../Html/Uwelcome.php');
        }

        $conn->close(); 

    


