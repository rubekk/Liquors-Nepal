<?php 
    if($_POST){
        session_start();
        
        $formEmail=$_POST['email'];
        $formPassword=$_POST['password'];
        $encryptedPw=md5($formPassword);
        
        include "connection.php";

        if($connection){  
            $sql="SELECT uname, id FROM users WHERE email='$formEmail' AND pw='$encryptedPw'";
            $result=mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) == 1) {
                $row=$result->fetch_assoc();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $row['uname'];
                $_SESSION['id'] = $row['id'];

                header("Location: ./../view/index.php");
            }
            else {
                header("Location: ./../view/message.php?message=notloggedin");
            }
        }
        mysqli_close($connection);
    }
?>