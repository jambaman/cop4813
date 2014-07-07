<?php
        session_start();

        $username = $_POST['username'];
        $password = $_POST['password'];


        if($username == "Madman" && $password == "Fortune500")
        {
                $_SESSION['username'] = $username;
                header("Location:admin.php");
        }else{
                
                header("Location:index.php?error=Provide correct credentials.");
        }
?>