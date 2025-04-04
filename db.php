<?php
    $conn = mysqli_connect("localhost", "root", "", "tracking_system");
    if(!($conn)){
        echo "connection not established";
    }
?>