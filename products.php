<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #39ff14;
            margin: 20px 0;
            text-shadow: 0 0 8px rgba(57, 255, 20, 0.5);
        }

        .card {
            background-color: #2e2e2e;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.2);
            margin: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 100%;
            max-width: 250px;
            min-height: 350px;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(57, 255, 20, 0.4);
        }

        .card-img-top {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-title {
            color: #aaffaa;
        }

        .card-text {
            color: #d1d1d1;
        }

        .btn-primary {
            background-color: #39ff14;
            border: none;
            color: #1a1a1a;
            box-shadow: 0 0 10px rgba(57, 255, 20, 0.3);
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #29a10d;
            color: #1a1a1a;

        }

        .btn-danger {
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
            color: #1a1a1a;

        }

        .btn-danger:hover {
            color: #1a1a1a;

        }

        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 10px;
        }

        .container {
            max-width: 1200px;
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "store");
    $read = "SELECT * FROM `products`";
    $sql = mysqli_query($con, $read);
    ?>
    <center>
        <h2>Products Management</h2>
    </center>
    <main class="container">
        <div class="row">
            <?php while ($row = mysqli_fetch_array($sql)): ?>
                <div class="col-md-3 d-flex justify-content-center">
                    <div class="card">
                        <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="Product Pic">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <p class="card-text"><?php echo "The Price Is : " . $row['price'] ?></p>
                            <div class="btn-group">
                                <a href="delete.php? id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                <a href="update.php? id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</body>

</html>