<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_designing";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit1"])) {
    mysqli_query($link, "INSERT INTO projects VALUES('$_POST[id]','$_POST[title]','$_POST[description]','$_POST[image]')");
    echo "Record inserted successfully";
}

if (isset($_POST["submit2"])) {
    mysqli_query($link, "DELETE FROM projects WHERE id='$_POST[id]'");
    echo "Record deleted successfully";
}

if (isset($_POST["submit3"])) {
    mysqli_query($link, "UPDATE projects SET title='$_POST[title]', description='$_POST[description]', image='$_POST[image]' WHERE id='$_POST[id]'");
    echo "Record updated successfully";
}

if (isset($_POST["submit4"])) {
    $res = mysqli_query($link, "SELECT * FROM projects");
    echo "<table border=1>";
    echo "<tr><th>id</th><th>title</th><th>description</th><th>image</th></tr>";
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['description']."</td><td>".$row['image']."</td></tr>";
    }
    echo "</table>";
}

if (isset($_POST["submit5"])) {
    $res = mysqli_query($link, "SELECT * FROM projects WHERE id='$_POST[id]'");
    echo "<table border=1>";
    echo "<tr><th>id</th><th>title</th><th>description</th><th>image</th></tr>";
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['description']."</td><td>".$row['image']."</td></tr>";
    }
    echo "</table>";
}
?>


