<?php

require "init.php";

$sql = "INSERT INTO users (email,password) VALUES ('myintmyint@gmail.com','myint123')";
$result = mysqli_query($conn,$sql);

if($result){
    header('location:user-list.php');
}
else{
    echo "Adding User Fail";
}