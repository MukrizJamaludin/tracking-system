<?php

include 'settings.php';

if (isset($_GET['email']) && isset($_GET['password'])) {
    $result = mysqli_query($con, "SELECT * FROM `user` WHERE `id`='".$_GET['email']."' AND `password`='".$_GET['password']."'");
    if (mysqli_num_rows($result) == 0){
        $result = mysqli_query($con, "INSERT INTO `user`(`id`, `password`) VALUES ('".$_GET['email']."','".$_GET['password']."')");
    }
    else {
        echo "err [3]: user already exist";
    }
}
else {
    echo "err [4]: invalid parameter";
}

 ?>
