<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Form</title>
    <style>
        body {

            background-color: green;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            text-align: center;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: yellow;
        }
    </style>
</head>

<body>

    <div class="container">
        
    <?php include('header.php'); ?>
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <p>User Name</p>
                <input type="text" Class="username" placeholder="username" required>

                <p> Password</p>
                <input type="password" Class="password" placeholder="password" required>

                <!-- <p> Reset Password</p>
                <input type="password" Class="password" placeholder="password" required> -->
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form><?php include('footer.php'); ?>
    </div>

    
</body>

</html>