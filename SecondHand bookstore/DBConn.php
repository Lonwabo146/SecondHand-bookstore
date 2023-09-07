<?php
    $dbConnection = mysqli_connect("localhost", "root", "", "bookstore");

    if (!$dbConnection) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>