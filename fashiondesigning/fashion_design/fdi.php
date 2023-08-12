<?php
include 'project_operations.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'insert') {
            $insertResult = insertProject($_POST['title'], $_POST['description'], $_POST['image']);
            echo $insertResult;
        } elseif ($_POST['action'] === 'update') {
            $updateResult = updateProject($_POST['project_id'], $_POST['new_title'], $_POST['new_description'], $_POST['new_image']);
            echo $updateResult;
        } elseif ($_POST['action'] === 'delete') {
            $deleteResult = deleteProject($_POST['project_id']);
            echo $deleteResult;
        }
    }
}
?>
