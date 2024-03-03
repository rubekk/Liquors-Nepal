<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Liquors Nepal</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- css links -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/register.css">
</head>
<body>
    <div class="container">
        <h1><a href="./index.php"><span class="blue">Liquors</span> <span class="green">Nepal</span></a></h1>
        <div class="form">
            <h2>Register</h2>
            <form action="./../backend/register.php" method="post">
                <div class="inp-group">
                    <div class="inp-label">Username</div>
                    <input type="name" placeholder="johndoe" name="name" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Email</div>
                    <input type="email" placeholder="example@etc.com" name="email" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Password</div>
                    <input type="password" name="password" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Confirm password</div>
                    <input type="password" name="cpassword" required>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>