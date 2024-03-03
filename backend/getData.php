<?php
    function getAllData($conn){
        $sql = "SELECT p.pid as pid, pname, price, category, imgPath FROM products p INNER JOIN pictures pic ON p.pid=pic.pid";
        
        return execSql($conn, $sql);
    }

    function getBeerData($conn){
        $sql = "SELECT p.pid as pid, pname, price, category, imgPath FROM products p INNER JOIN pictures pic ON p.pid=pic.pid AND p.category='beer'";
        
        return execSql($conn, $sql);
    }

    function getWineData($conn){
        $sql = "SELECT p.pid as pid, pname, price, category, imgPath FROM products p INNER JOIN pictures pic ON p.pid=pic.pid AND p.category='wine'";
        
        return execSql($conn, $sql);
    }

    function getWhiskeyData($conn){
        $sql = "SELECT p.pid as pid, pname, price, category, imgPath FROM products p INNER JOIN pictures pic ON p.pid=pic.pid AND p.category='whiskey'";
        
        return execSql($conn, $sql);
    }

    // main query function
    function execSql($conn, $sql){
        try{
            $result = mysqli_query($conn, $sql);
            $data=(array) null;
            $i=0;
            
            if (mysqli_num_rows($result) > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[$i]=array('pid'=>$row["pid"], 'pname'=>$row["pname"], 'price'=>$row["price"], 'category'=>$row["category"], 'imgPath'=>$row["imgPath"]);
                    $i+=1;
                }
            }
            return $data;
        }
        catch(Exception $e){
            echo $e;
            return $e;
        }
    }
?>