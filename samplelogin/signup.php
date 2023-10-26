<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Boostrap code -->
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

        #btn {
            border-color: transparent;
            pointer-events: none;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <label for="">Enter your Name:</label>
        <input type="text" name="name" placeholder="Enter your Name" class="form-control">
        <br>
        <label for="">Enter your Password:</label>
        <input type="password" name="pass" placeholder="Enter your password" class="form-control">
        <br>
        <label for="">Confirm your Password:</label>
        <input type="password" name="conf_pass" placeholder="Confirm your password" class="form-control">
        <br>
        <button type="submit" name="submit" class="btn btn-primary">REGISTER</button>
        <br><br>
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>


    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $password = '';
    $dbase = 'users';

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $conf_pass = isset($_POST['conf_pass']) ? $_POST['conf_pass'] : '';

    if ($pass === $conf_pass) {
        $conn = new mysqli($dbhost, $dbuser, $password, $dbase);
        if ($conn->connect_error) {
            echo "\n The connection Failed!! \n", mysqli_connect_error();
            exit();
        } else {
            echo "";
            $sql = "INSERT INTO user_info (username, password) VALUES ('$name', '$pass')";
            $result = $conn->query($sql);
            
            global $cpass;
            if (isset($_POST['submit'])) {
                if ($pass === $conf_pass) {
                    echo "<center>New User Created: $name </center>";
                } else {
                    echo "<center>Password do not match</center>";
                }
            }
        }
    } else {
        echo "<center>Password do not match</center>";
    }

    ?>

</body>

</html>