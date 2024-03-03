<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload - Bipana ko Ghar</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo.png">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- css links -->
    <link rel="stylesheet" href="./../view/style/style.css">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <!-- header section -->
    <div class="header">
        <div class="left">
        <h1><a href="./index.php"><span class="blue">Rubek - </span> <span class="green">LiquorsNepal</span> Admin</a></h1>
        </div>
    </div>

    <!-- upload section -->
    <div class="upload">
        <h3>Details about product</h3>
        <form action="./../backend/upload.php" method="post" enctype="multipart/form-data">
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label">Product name:</div>
                    <input type="text" placeholder="eg: nepal ice" name="pname" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Price in rs:</div>
                    <input type="text" placeholder="eg: 7000" name="price" required>
                </div>
            </div>
            <div class="inp-row">
                <div class="inp-group">
                    <div class="inp-label">Category:</div>
                    <input type="text" placeholder="eg: wine" name="category" required>
                </div>
                <div class="inp-group">
                    <div class="inp-label">Upload an image:</div>
                    <input type="file" accept="image/*" name="image[]" required>
                </div>
            </div>
            <div class="submit">
                <button class="submit-btn" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <!-- data table to delete -->
    <div class="data-table">
        <h3>List of data</h3>
        <div class="data-table-inner">
            <table>
                <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
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
                            
                            echo '<tr>
                                <td class="table-pname">
                                    <img src=' .$imgPath. ' alt="">
                                    <span>' .$pname. '</span>
                                </td>
                                <td>' .$category. '</td>
                                <td>Rs. ' .$price. '</td>
                                <td><a href="./../backend/deleteData.php?id=' .$pid. '"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>';
                        }
                    }
                    else echo "Sorry, no liquors found!";
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>