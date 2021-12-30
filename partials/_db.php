<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "iDiscuss";
$conn = mysqli_connect($servername,$username,$password,$database);

// if(!$conn){
//     die("Can't connect because of this error-->" . mysqli_connect_error());
// }
// else{
//     echo "Connected ";
// }

// $sql = "CREATE DATABASE iDiscuss";
// $result = mysqli_query($conn,$sql);
// if($result){
//     echo "Dbms created";
// }
// else{
//     echo "cant' create";
// }

// $sql = "CREATE TABLE `categories` (`category_id` INT(6) NOT NULL AUTO_INCREMENT, `category_name` VARCHAR(255) NOT NULL, `category_description`
// VARCHAR(255) NOT NULL, `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`category_id`)) ";
// $result = mysqli_query($conn,$sql);
// if($result){
//     echo "Tables created";
// }
// else{
//     echo "can't created -->" . mysqli_error($conn);
// }
?>