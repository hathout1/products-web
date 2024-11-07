<?php
$con = mysqli_connect("localhost", "root", "", "store");
$id = $_GET['id'];
$read = "SELECT * FROM `products` WHERE `id` = '$id'";
$sql = mysqli_query($con, $read);
$row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Process</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main {
            background-color: #2e2e2e;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.2);
            text-align: center;
            width: 75%;
            /* تعديل العرض إلى 75% */
        }

        h2 {
            color: #39ff14;
            padding-top: 100px;
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.5);
        }

        img {
            border-radius: 10px;
            margin: 15px 0;
            max-width: 100%;
            height: auto;
        }

        form input[type="text"] {
            background-color: #1a1a1a;
            color: #39ff14;
            border: 2px solid #39ff14;
            border-radius: 5px;
            padding: 10px;
            width: 50%;
            margin: 10px 0;
            transition: border-color 0.3s;
        }

        form input[type="text"]:focus {
            border-color: #aaffaa;
            outline: none;
        }

        button,
        a {
            background-color: #39ff14;
            border: none;
            color: #1a1a1a;
            padding: 10px 20px;
            margin: 25px 5px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.3);
        }

        button:hover,
        a:hover {
            background-color: #29a10d;
            color: #ffffff;
        }
    </style>

    <script>
        window.onload = function() {
            const fields = ['id', 'name', 'price'];
            fields.forEach(field => {
                document.querySelector(`input[name="${field}"]`).readOnly = true;
            });
        };
    </script>
</head>

<body>
    <div class="main">
        <h2>Confirming The Process</h2>
        <img src="el-ba4mohndes_store-removebg-preview.png" alt="logo" width="450px">
        <form action="addingcart.php" method="POST">
            <input type="text" name="id" value="<?php echo $row['id'] ?>">
            <input type="text" name="name" value="<?php echo $row['name'] ?>">
            <input type="text" name="price" value="<?php echo $row['price'] ?>"><br>
            <button name="add">Confirm</button><br>
            <a href="shop.php">Back</a>
        </form>
    </div>
</body>

</html>