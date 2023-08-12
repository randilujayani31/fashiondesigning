<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_designing";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["submit_action"];

    if ($action === "update") {
        // Update item in the database
        $item_id = $_POST["item_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        
        $sql = "UPDATE items SET title='$title', description='$description', image='$image' WHERE id='$item_id'";
        $conn->query($sql);
    } elseif ($action === "delete") {
        // Delete item from the database
        $item_id = $_POST["item_id"];
        
        $sql = "DELETE FROM items WHERE id='$item_id'";
        $conn->query($sql);
    }
    
    // Additional code to handle the insert action
    elseif ($action === "insert") {
        // Insert item into the database
        $title = $_POST["title"];
        $description = $_POST["description"];
        $image = $_POST["image"];
        
        $sql = "INSERT INTO items (title, description, image) VALUES ('$title', '$description', '$image')";
        $conn->query($sql);
    }
}

$conn->close();
?>

