<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .main {
            width: 75%;
            background-color: #2e2e2e;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(57, 255, 20, 0.2);
            text-align: center;
        }

        h2 {
            color: #39ff14;
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1a1a1a;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.2);
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            color: #d1d1d1;
            border-bottom: 1px solid #333;
        }

        th {
            background-color: #39ff14;
            color: #1a1a1a;
            font-weight: bold;
        }

        tr:hover {
            background-color: #2e2e2e;
        }

        a {
            color: #ff4c4c;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #ff1a1a;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
        }

        .btn-del {
            background-color: #ff4c4c;
            border: none;
            color: white;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        .btn-del:hover {
            background-color: #ff1a1a;
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "store");
    $read = "SELECT * FROM cart";
    $sql = mysqli_query($con, $read);
    ?>

    <div class="main">

        <h2>My Shopping Cart</h2>
        <img src="el-ba4mohndes_store-removebg-preview.png" alt="logo" width="450px">

        <table>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($sql)) : ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><button name="del" class="btn-del" onclick="window.location.href='del_prod.php?id=<?php echo $row['id']; ?>'">Delete</button></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>