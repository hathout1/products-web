<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Neon Login</title>
    <style>
        /* إعدادات عامة */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* تنسيق الحاوية */
        .container {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.3);
            width: 300px;
            text-align: center;
        }

        /* تنسيق النص */
        label {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            color: #b0b0b0;
        }

        /* تنسيق الحقول */
        input[type="text"],
        input[type="password"] {
            background-color: #333;
            border: 2px solid #2a2a2a;
            border-radius: 5px;
            padding: 10px;
            color: #e0e0e0;
            width: 100%;
            box-sizing: border-box;
            outline: none;
            font-size: 16px;
        }

        /* تنسيق عند التركيز على الحقل */
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #00ffff;
            box-shadow: 0px 0px 8px rgba(0, 255, 255, 0.6);
        }

        /* تنسيق الزر */
        button {
            margin-top: 20px;
            background-color: #00bfbf;
            border: none;
            color: #fff;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: box-shadow 0.3s ease;
        }

        /* تنسيق عند تمرير الماوس فوق الزر */
        button:hover {
            box-shadow: 0px 0px 10px rgba(0, 255, 255, 0.8);
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="users.php" method="POST">
            <label for="name">Username</label>
            <input type="text" id="name" name="name">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <button name="confirm">Log In</button>
        </form>
    </div>
</body>

</html>