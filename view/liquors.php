<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquors - Liquors Nepal</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/categories.css">
</head>
<body>
    <!-- header section -->
    <?php include "./header.php"; ?>

    <!-- listing section -->
    <div class="listing">
        <?php
            include "./../backend/connection.php";
            include "./../backend/getData.php";
            
            $data=getAllData($connection);

            if(gettype($data)=='array' && count($data)){  
                for($i=0; $i<count($data); $i++){
                    $pid=$data[$i]['pid'];
                    $pname=$data[$i]['pname'];
                    $price=$data[$i]['price'];
                    $category=$data[$i]['category'];
                    $imgPath=$data[$i]['imgPath'];
                    

                    echo '<div class="ind-product">
                        <div class="product-img">
                            <img src=' .$imgPath. ' alt="">
                        </div>
                        <div class="product-category">'. $category .'</div>
                        <div class="product-name">'. $pname .'</div>
                        <div class="product-price">Rs. <span class="actual-price">'. $price .'</span></div>
                        <i class="fa-solid fa-plus add-to-cart-btn"></i>
                    </div>';
                }
            }
            else echo "Sorry, no liquors found!";
        ?>
    </div>

    <!-- cart section -->
    <div class="cart">
    </div>

    <!-- footer section -->
    <?php include "footer.php" ?>

    <script src="./js/cart.js"></script>
</body>
</html>