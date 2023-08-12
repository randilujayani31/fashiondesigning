<?php
// Include the functions.php file
require_once 'functions.php';

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $image = $_POST["image"];

    // Validate form data
    $errors = validateForm($_POST);

    if (empty($errors)) {
        // Insert project into the database
        insertProject($title, $description, $image);
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}

// Retrieve and display project data
$projects = getProjects();
foreach ($projects as $project) {
    echo $project["title"] . ': ' . $project["description"] . '<br>';
}

// Update project
updateProject($project_id, $new_title, $new_description, $new_image);

// Delete project
deleteProject($project_id);
?>
