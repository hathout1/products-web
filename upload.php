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

        h3 {
            color: #aaffaa;
            font-size: 28px;
            margin: 20px 0;
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.3);
        }

        img {
            border-radius: 10px;
            margin: 15px 0;
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
</head>

<body>
    <center>
        <h2>Welcome To My Products Store</h2>
        <img src="el-ba4mohndes_store-removebg-preview.png" alt="logo" width="450px">
        <div class="main">
            <form method="POST" action="insert.php" enctype="multipart/form-data">
                <h3>Adding A Product</h3>
                <label for="name">Name</label>
                <input type="text" name="name"><br>
                <label for="price">Price</label>
                <input type="text" name="price"><br>
                <label for="file" class="pic">Product Picture</label>
                <input type="file" id="file" name="image" style="display: none;">
                <button name="upload">Add Product</button><br>
                <a href="products.php">Display The Store</a><br>
                <a href="shop.php">Make shopping</a>
            </form>
        </div>
        <p>Developed By EL-BA4MOHANDES</p>
    </center>
</body>

</html>