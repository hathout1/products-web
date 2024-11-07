<?php

$admins = ["EL-BA4MOHANDES", "Generl Mody", "Hathout"];
$pass = [12345, 532002, 302030];

if (isset($_POST['confirm'])) {
    $name = $_POST['name'];
    $pass1 = $_POST['password'];
    if (in_array($name, $admins) && in_array($pass1, $pass)) {
        header("location: upload.php");
    } else {
        header("location: shop.php");
    }
}
