<?php

function createconn(){
    $host = 'localhost';
    $username = "root";
    $password = "";
    $dbname = "fashion_designing";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    return $conn;
}

function register($username, $pwd) {
    $conn = createconn();
    $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);

    // Insert user details
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);

    // Corrected line: Added $stmt before bind_param
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        return true; // Registration successful
    } else {
        return false; // Registration failed
    }
}

function login($username, $pwd) {
    $conn = createconn();
    $query = "SELECT password FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();

    // Verify the password
    if (password_verify($pwd, $hashedPassword)) {
        return true; // Login successful
    } else {
        return false; // Login failed
    }
}

?>
