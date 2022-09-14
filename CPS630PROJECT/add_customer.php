<?php
    /* getting user's information when the register */
    $user_ID = $_POST['$user_ID'];
    $user_name = $_POST['user_name'];
    $user_tel = $_POST['$user_tel'];
    $user_Email = $_POST['$user_Email'];
    $user_address = $_POST['$user_address'];
    $city_code = $_POST['city_code'];
    $user_LogID = $_POST['userLogID'];
    $user_password = $_POST['user_password'];
    $user_balance = $_POST['$user_balance'];

    /* connection and error checking */
    $connect = mysqli_connect("localhost", "localMyAdmin", "123456", "smartcustomerservices");
    if($connect -> connect_error){
        die("Connection Failed:".$connect -> connect_error);
    }else{
        print("Database connected.");
    }

    /* inserting customer to userTable from registration page */
    $sql = "INSERT INTO `usertable`(`userID`, `userName`, `userTel`, `userEmail`, `userAddress`, `cityCode`, `userLogID`, `userPassword`, `userBalance`) VALUES ('$user_ID', '$user_name', '$user_tel', '$user_Email', '$user_address', '$city_code', '$user_LogID', '$user_password', '$user_balance')";
    $connect -> query($sql);
    $connect -> close();
?>