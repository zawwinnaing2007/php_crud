<?php

require "init.php";

$sql = "UPDATE users SET email='koko@gmail.com' where id=1";
$result = mysqli_query($conn,$sql);

if($result) {
    header('location:user-list.php');
    die();
}
else {
    echo "User Updating Fail";
}