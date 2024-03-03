<?php
    include "connection.php";

    if($connection){    
        // $sql="CREATE table users(
        //     id INT PRIMARY KEY AUTO_INCREMENT,
        //     uname VARCHAR(25) NOT NULL,
        //     email VARCHAR(50) NOT NULL,
        //     pw VARCHAR(50) NOT NULL
        // )";
        // $sql="CREATE table products(
        //     pid INT PRIMARY KEY AUTO_INCREMENT,
        //     pname VARCHAR(100) NOT NULL, 
        //     price BIGINT(20) NOT NULL, 
        //     category VARCHAR(100) NOT NULL
        // )";
        // $sql="CREATE table pictures(
        //     pid INT NOT NULL,
        //     picId INT PRIMARY KEY AUTO_INCREMENT,
        //     `imgpath` VARCHAR(100) NOT NULL,
        //     FOREIGN KEY (pid) REFERENCES products(pid)
        // )";
        
        mysqli_query($connection, $sql);

        echo("successful");
    }    
    mysqli_close($connection);
?>