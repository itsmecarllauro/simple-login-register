<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'user_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
          
            $_SESSION['username'] = $user['username'];
            
            header('Location: welcome.php');
            exit();
        } else {
            echo "Invalid credentials!";
        }
    } else {
        echo "No user found with that username.";
    }

    $conn->close();
}
?>