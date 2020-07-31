<?php

require 'init.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach ($users as $user) {
   echo "<pre>". $user['email']. "</pre>";
}

foreach ($users as $user) {
    echo $user['email']. "<br>";
 }

echo "<pre>";
print_r($users);
echo "</pre>";

echo "<pre>";
var_dump ($users);
echo "</pre>";

?>