<?php
include 'login_process.php';

if (isset($_POST['signup'])) {
    $user_name = $_POST['email'];
	$pwd = $_POST['pwd'];
	

    register($user_name,$pwd);
}

if (isset($_POST['login'])) {
	$user_name = $_POST['email'];
	$pwd = $_POST['pwd'];
	login($username,$pwd);

}

if (login($username, $pwd)) {
    session_start();
    $_SESSION['email'] = $username;
    // Redirect the user to the authenticated area
    header("Location: home.php");
    exit();
} else {
    // Display error message
    echo "Invalid username or password";
}

session_start();
if (!isset($_SESSION['email'])) {
    // Redirect to login page
    header("Location: index.php");
    exit();
}



?>