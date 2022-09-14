<?php 
	$user_id = $_POST['user_id'];
	$connect = mysqli_connect("localhost", "localMyAdmin", "123456", "smartcustomerservices");
    if($connect -> connect_error){
        die("Connection Failed:".$connect -> connect_error);
    }else{
        print("Database connected.");
    }

	$sql = "DELETE FROM `smartcustomerservices` WHERE userID = '$user_id' LIMIT 1";
	$connect -> query($sql);
	$connect -> close();
?>