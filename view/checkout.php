<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Liquors Nepal</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/checkout.css">
</head>
<body>
    <!-- header section -->
    <?php include "./header.php"; ?>

    <div class="checkout-container">
        <div class="checkout-bill"></div>

        <!-- checkout inputs -->
        <div class="checkout-inps">
            <div class="inp-group">
                <div class="inp-label">Address</div>
                <input type="text" placeholder="Gwarko">
            </div>
            <div class="inp-group">
                <div class="inp-label">Phone number</div>
                <input type="text" placeholder="9876543210">
            </div>
            <div class="inp-group">
                <div class="inp-label">Payment method</div>
                <div class="payment-method">
                    <div class="pm cod choosen-payment">Cash on Delivery</div>
                    <div class="pm esewa">
                        <img src="./imgs/esewa.png" alt="">
                    </div>
                </div>
            </div>
            <a href="./message.php?message=checkedout">
                <button class="checkout-btn">Checkout</button>
            </a>
        </div>
    </div>

    <!-- footer section -->
    <?php include "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/checkout.js"></script>
</body>
</html>