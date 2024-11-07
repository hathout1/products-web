<?php

$con = mysqli_connect("localhost", "root", "", "store");


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;
    $update = "UPDATE products SET `name` = '$name' , `price` = '$price' , `image` = '$image_up' WHERE `id` = '$id'";
    $sql = mysqli_query($con, $update);
    move_uploaded_file($image_location, 'images/' . $image_name);


    header('location: products.php');
}
