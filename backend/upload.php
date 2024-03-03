<?php
    if($_POST){
        session_start();
        
        // data from form
        $productName=$_POST['pname'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $imgAddress=$_FILES['image'];
        
        include "connection.php";

        if($connection){   
            $uname=$_SESSION['username'];

            
            // uploading data to property table
            $sql="INSERT INTO products(pname, price, category) VALUES ('$productName', '$price','$category')";
            mysqli_query($connection, $sql);  
            $pid=mysqli_insert_id($connection);
            
            // storing image
            $target_dir="./../uploads/";

            foreach ($imgAddress['name'] as $key => $value) {
                $target_file = $target_dir . str_replace(" ","",basename($imgAddress["name"][$key]));
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                $check = getimagesize($imgAddress["tmp_name"][$key]);
                if($check !== false) {
                    move_uploaded_file($imgAddress['tmp_name'][$key], $target_file);
                    
                    $sql="INSERT INTO pictures(pid, imgPath) VALUES ('$pid', '$target_file')";

                    mysqli_query($connection, $sql);
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            header("Location: ./../view/message.php?message=uploaded");
        }    
        else{
            header("Location: ./../view/message.php?message=notuploaded");
        }
        mysqli_close($connection);
    }
?>