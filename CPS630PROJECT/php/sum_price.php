<?php
    $connect = mysqli_connect("localhost", "localMyAdmin", "123456", "smartcustomerservice");
    if($connect -> connect_error){
        die("Connection Failed:".$connect -> connect_error);
    }else{
        print("Database connected.");
    }

    $sql = "SELECT SUM(itemPrice) AS 'totalPrice' FROM itemTable";
    $connect -> query($sql);
    $connect -> close();
?>