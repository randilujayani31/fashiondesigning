<?php
$name = $email = $phone = $message = "";
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST["name"]);
    $email = sanitizeInput($_POST["email"]);
    $phone = sanitizeInput($_POST["phone"]);
    $message = sanitizeInput($_POST["message"]);

    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors["name"] = "Name must contain only letters and spaces";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // You can add additional validation for phone if needed

    if (strpos($message, "<") !== false || strpos($message, ">") !== false) {
        $errors["message"] = "Message cannot contain HTML tags";
    }

    if (empty($errors)) {
        // Process the form data, send email, etc.
        // Display success message or redirect to a thank-you page
    }
}

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>

<div class="form-container">
    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
