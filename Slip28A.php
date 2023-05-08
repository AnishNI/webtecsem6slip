<?php
    // Establish database connection
    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
    if (!$conn)
    {
        die('Connection failed: ' . mysqli_connect_error());
    }
    // Get username and password from AJAX request
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Query the users table for the entered username and password
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        echo "valid";
    }
    else
    {
        echo "invalid";
    }
    // Close database connection
    Mysqli_close($conn);
?>