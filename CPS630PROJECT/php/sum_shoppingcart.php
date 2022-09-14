<?php
    $receipt_ID = $_POST['$receipt_ID'];
    $store_code = $_POST['$store_code'];
    $total_price = $_POST['$total_price'];

    $connect = mysqli_connect("localhost", "localMyAdmin", "123456", "smartcustomerservice");
    if($connect -> connect_error){
        die("Connection Failed:".$connect -> connect_error);
    }else{
        print("Database connected.");
    }

    $sql = "INSERT INTO `shoppingtable`(`receiptID`, `storeCode`, `totalPrice`) VALUES ('$receipt_ID', '$store_code', '$total_price')";
    $connect -> query($sql);
    $connect -> close();
?>
?>