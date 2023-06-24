<?php


        
        session_start();
        require '../Html/config.php';

        if(isset($_POST['update'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            
        }    
        
        $sql = "UPDATE admins SET username='$username', email='$email',  mobile='$mobile'."'";
        
        if($conn->query($sql) === TRUE){

            session_start();
            $_SESSION['status'] = "Case Updated Successfully.";
            header('Location:../Html/Awelcome.php');
        }
        else {
            $_SESSION['fail'] = "Case Updation Unsuccessful.";
            header('Location:../Html/Awelcome.php');
        }

        $conn->close(); 

    


