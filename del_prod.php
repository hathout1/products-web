<?php

$con = mysqli_connect("localhost", "root", "", "store");

$id = $_GET['id'];
$del = "DELETE FROM `cart` WHERE `id` = '$id'";
$sql = mysqli_query($con, $del);

header("location: cart.php");
