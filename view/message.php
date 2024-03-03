<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquors Nepal</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/message.css">
</head>
<body>
    <!-- header section -->
    <?php include "./header.php"; ?>

    <div class="message">
        <?php
            if(isset($_GET['message'])){
                switch ($_GET['message']){
                    case 'registered': 
                        echo "<p class='msg'>Registered</p>";
                        header( "refresh:2;url=./login.php" );
                        break;
                    case 'notregistered': 
                        echo "<p class='msg'>Not Registered</p>";
                        header( "refresh:2;url=./register.php" );
                        break;
                    case 'notloggedin': 
                        echo "<p class='msg'>Not logged in</p>";
                        header( "refresh:2;url=./login.php" );
                        break;
                    case 'uploaded': 
                        echo "<p class='msg'>uploaded</p>";
                        header( "refresh:2;url=./../admin/index.php" );
                        break;
                    case 'notuploaded': 
                        echo "<p class='msg'>Not uploaded</p>";
                        header( "refresh:2;url=./../admin/index.php" );
                        break;
                    case 'deleted': 
                        echo "<p class='msg'>Deleted successfully</p>";
                        header( "refresh:2;url=./../admin/index.php" );
                        break;
                    case 'checkedout': 
                        echo "<p class='msg'>Checkout successfull</p>";
                        break;
                    default:
                        echo "<p class='msg'>default</p>";
                        header( "refresh:2;url=./index.php" );
                }
            }
        ?>
    </div>

    <!-- footer section -->
    <?php include "footer.php" ?>
</body>
</html>