<?php

$con = mysqli_connect("localhost", "root", "", "store");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $insert = "INSERT INTO `cart` (`name` , `price`) VALUES ('$name','$price')";
    $sql = mysqli_query($con, $insert);

    header("location: cart.php");
}
