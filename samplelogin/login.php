<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if the username exists in the database
$sql = "SELECT * FROM user_info WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, now check the password
    $row = $result->fetch_assoc();
    if ($row['password'] == $password) {
        // Authentication successful
        echo "<br><h1><center>Welcome " . $row['username'] . "</center></h1>";
        // go back to index.php
        echo "<br><center><a href='index.php'>Go back</a></center>";
    } else {
        // Incorrect password
        echo "Incorrect password. Please try again.";
    }
} else {
    // User not found
    echo "User not found. Please check your username.";
}

$conn->close();
?>