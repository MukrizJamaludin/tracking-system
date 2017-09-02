<?php
header('Access-Control-Allow-Origin: *');

include 'settings.php';

if (isset($_GET['email']) && isset($_GET['password'])) {
    $result = mysqli_query($con, "SELECT * FROM `user` WHERE `id`='".$_GET['email']."'");
    if (mysqli_num_rows($result) > 0){
        echo("Valid!");
    }
    else {
        echo "err [3]: user doesn't exist";
    }
}
else {
    echo "err [4]: invalid parameter";
}

 ?>
