<?php

require "init.php";

$sql = "DELETE FROM users where id=12";
$result = mysqli_query($conn,$sql);

if($result){
    header("location:user-list.php");
}
else{
    echo "Deleting user fail";
}