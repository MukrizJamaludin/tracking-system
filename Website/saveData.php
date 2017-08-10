<?php

include 'settings.php';

if (isset($_GET['id']) && isset($_GET['lo']) && isset($_GET['la'])) {
    $sql = "SELECT * FROM `user` WHERE `id`='".$_GET['id']."'";
    $result = mysqli_query($con, $sql);
    if ($result){
        if (mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO `user`(`id`, `longtitude`, `latitude`) VALUES ('".$_GET['id']."','".$_GET['lo']."','".$_GET['la']."')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "add data success";
            }
        }
        else {
            $sql = "UPDATE `user` SET `longtitude`='".$_GET['lo']."',`latitude`='".$_GET['la']."' WHERE `id`='".$_GET['id']."'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "update data success";
            }
        }
    }
    else {
        echo "err [1]: connection failed";
    }
}
else {
    echo "err [2]: invalid parameter";
}

?>