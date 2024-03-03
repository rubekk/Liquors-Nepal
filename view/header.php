<?php session_start(); ?>
<!-- header section -->
<div class="header">
    <div class="left">
    <h1><a href="./index.php"><span class="blue">Rubek - </span> <span class="green">LiquorsNepal</span></a></h1>
    </div>
    <div class="right">
        <div class="explore-all"><a href="./liquors.php">Explore all</a></div>
        <div class="cart-btn">
            <i class="fa-solid fa-cart-shopping"></i>
            <div class="total-cart-items">0</div>
        </div>
        <?php if($_SESSION && $_SESSION['loggedin']==true) { ?>
            <span><?php echo $_SESSION['username']; ?></span>
            <a class="login" href="./../backend/logout.php">Log Out</a>
        <?php } else { ?>
            <a class="login" href="./login.php">Log In</a>
        <?php } ?>
    </div>
</div>