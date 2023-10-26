<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            margin-top: 50px;
            /* light colors */
            background-color: #f5f5f5;
            /* rounded corners */
            border-radius: 5px;
            /* drop shadow */
            box-shadow: 0 0 5px #666;
            padding: 20px;
        }
        #btn{
            border-color: transparent;
            pointer-events: none;
        }
    </style>
    <title>Login page</title>
</head>
<body>
    <br>
    <h3 align="center">User Login</h3><br>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required><br>
        <input type="submit" name="submit" value="Login"  class="btn btn-primary">
        <br><br>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
</body>
</html>