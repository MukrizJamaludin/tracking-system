<?php

include 'settings.php';

if (isset($_GET['id'])) {
    $result = mysqli_query($con, "SELECT `longtitude`, `latitude` FROM `user` WHERE `id`='".$_GET['id']."'");
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo "(".$row['longtitude'].",".$row['latitude'].")";
    }
    else {
        echo "err [3]: user doesn't exist";
    }
}
else {
    echo "err [4]: invalid parameter";
}

?>