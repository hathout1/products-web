<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Store</title>
    <style>
        /* إعدادات الصفحة العامة */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            font-size: 20px;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #39ff14;
            font-size: 36px;
            margin-top: 20px;
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.5);
        }

        .main {
            padding: 20px;
            background-color: #1e1e1e;
            margin: 10px auto;
            border-radius: 8px;
            width: 60%;
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.1);
        }

        label {
            color: #b0e57c;
            font-size: 18px;
            display: block;
            text-align: left;
            margin: 10px 0;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="text"] {
            display: block;
            margin: 10px auto;
            width: 80%;
            padding: 10px;
            font-size: 18px;
            color: #d0ffd6;
            background-color: #2b2b2b;
            border: 1px solid #39ff14;
            border-radius: 5px;
            outline: none;
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.2);
        }

        button {
            background-color: #39ff14;
            border: none;
            color: #121212;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.3);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        button:hover {
            background-color: #29a10d;
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.5);
        }

        .pic {
            background-color: #1589FF;
            border: none;
            width: 140px;
            color: #121212;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            margin-top: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px #1589FF;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .pic:hover {
            background-color: #143BFF;
            box-shadow: 0 0 15px #143BFF;
        }

        a {
            color: #39ff14;
            text-decoration: none;
            font-size: 20px;
            display: inline-block;
            margin-top: 15px;
            transition: color 0.3s;
        }

        a:hover {
            color: #aaffaa;
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.5);
        }

        p {
            font-size: 16px;
            color: #b3b3b3;
            margin-top: 30px;
        }
    </style>
    <script>
        window.onload = function() {
            document.querySelector('input[name="id"]').readOnly = true;
        };
    </script>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "store");
    $id = $_GET['id'];
    $read = "SELECT * FROM `products` WHERE `id` = $id";
    $sql = mysqli_query($con, $read);
    $row = mysqli_fetch_array($sql);
    ?>
    <center>
        <h2>Updating A Product</h2>
        <div class="main">
            <form method="POST" action="edit.php" enctype="multipart/form-data">
                <label for="id">ID</label>
                <input type="text" name="id" value="<?php echo $row['id'] ?>"><br>
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
                <label for="price">Price</label>
                <input type="text" name="price" value="<?php echo $row['price'] ?>"><br>
                <label for="file" class="pic">Product Picture</label>
                <input type="file" id="file" name="image" style="display: none;">
                <button name="update">Update Product</button><br>
            </form>
        </div>
    </center>
</body>

</html>