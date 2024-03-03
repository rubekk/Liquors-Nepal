<?php
    // $servername="localhost";
    // $username="root";
    // $password="";
    // $dbname="liquorsnepal";

    // $connection=new mysqli($servername,$username,$password,$dbname);

    // if ($connection->connect_error) {
    //     die("Connection failed: " . $connection->connect_error);
    // }
    include "./connection.php";

    if(isset($_GET['id'])){
        $id=(int) $_GET['id'];

        $sql = "DELETE FROM pictures WHERE pid=$id";
        mysqli_query($connection, $sql);

        $sql = "DELETE FROM products WHERE pid=$id";
        mysqli_query($connection, $sql);

        header("Location: ./../view/message.php?message=deleted");
    }    
?>