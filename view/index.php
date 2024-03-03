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
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
    <!-- header section -->
    <?php include "./header.php"; ?>

    <!-- search section -->
    <div class="landing">
        <div class="slogan-bg" data-aos="zoom-in" data-aos-duration="2500">
            <div class="slogan">Pouring Passion into Every Sip !!</div>
        </div>
        <div class="lines">
            <div class="line active-line"></div>
            <div class="line"></div>
        </div>
    </div>

    <!-- categories section -->
    <div class="categories">
        <h3>Categories</h3>
        <div class="categories-inner" data-aos="fade-up" data-aos-duration="1500">
            <a href="./liquors-beer.php">
                <div class="ind-category">
                    <div class="category-img">
                        <img src='./imgs/category-beer.png' alt="">
                    </div>
                    <div class="category-name">Beer</div>
                </div>
            </a>
            <a href="./liquors-wine.php">
                <div class="ind-category">
                    <div class="category-img">
                        <img src='./imgs/category-wine.png' alt="">
                    </div>
                    <div class="category-name">Wine</div>
                </div>
            </a>
            <a href="./liquors-whiskey.php">
                <div class="ind-category">
                    <div class="category-img">
                        <img src='./imgs/category-whiskey.png' alt="">
                    </div>
                    <div class="category-name">Whiskey</div>
                </div>
            </a>
        </div>
    </div>

    <!-- featured listings section -->
    <div class="featured-listings">
        <h3>Featured liquors</h3>
        <div class="featured-listings-inner" data-aos="fade-up" data-aos-duration="1500">
            <?php
                include "./../backend/connection.php";
                include "./../backend/getdata.php";

                $data=getAllData($connection);
                
                if($data){
                    $num=4;
                    if(count($data)>4) $num=4;
                    else $num=count($data);

                    for($i=0; $i<$num; $i++){
                        if(!(count($data)<4 && $i>3)){
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
                }
                else{
                    echo "Sorry, no liquors found!";
                }
            ?>
        </div>
        <div class="see-more">
            <button class="see-more-btn">
                <a href="./liquors.php">See more <i class="fa-solid fa-chevron-right"></i></a>
            </button>
        </div>
    </div>

    <!-- cart section -->
    <div class="cart">
    </div>

    <!-- footer section -->
    <?php include "footer.php" ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./js/landing.js"></script>
    <script src="./js/cart.js"></script>
</body>
</html>