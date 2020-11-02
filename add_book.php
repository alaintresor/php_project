<?php
include 'connection.php';
$bn = $_POST['bn'];
$title = $_POST['title'];
$autho = $_POST['autho'];
$category = $_POST['category'];
$picture = $_POST['picture'];

$query = "INSERT INTO `books` VALUES('','$bn','$title','$autho','$category','$picture')";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "data saved well";
} else {
    echo "something went a worng";
}
