<?php
    /* getting information from the order table */
    $order_ID = $_POST['$order_ID'];
    $date_issued = $_POST['$date_issued'];
    $date_received = $_POST['$date_received'];
    $total_price = $_POST['$total_price'];
    $payment_code = $_POST['$payment_code'];

    /* connection and error checking */
    $connect = mysqli_connect("localhost", "localMyAdmin", "123456", "smartcustomerservice");
    if($connect -> connect_error){
        die("Connection Failed:".$connect -> connect_error);
    }else{
        print("Database connected.");
    }
    /* inserting information */
    $sql = "INSERT INTO `ordertable`(`orderID`, `dateIssued`, `dateReceived`, `totalPrice`, `paymentCode`) VALUES ('$order_ID', '$date_issued', '$date_received', '$total_price', '$payment_code')";
    $connect -> query($sql);
    $connect -> close();
?>