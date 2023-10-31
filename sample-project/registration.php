<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        .form-group input[type="email"],
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
       
            <div class="form-group">
                <p> First Name</p>
                <input type="text" name="firstname" class="text" placeholder="enter first name">
                <p> Last Name</p>
                <input type="text" name="lastname" class="text" placeholder="enter last name">
                <p> Email</p>
                <input type="email" name="email" class="email" placeholder="email">
                <p> Address</p>
                <input type="text" name="address" class="text" placeholder="address">
                <p> User Name</p>
                <input type="text" name="username" class="text" placeholder="username">

                <p> Password</p>
                <input type="password" name="password" class="password" placeholder="password">
                <p> Confirm Password</p>
                <input type="password" name="confirm" class="password" placeholder="password">
            </div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
   
          </div>
</body>

</html>