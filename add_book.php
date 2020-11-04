<?php
include 'connection.php';
$BN = $_POST['bn'];
$title = $_POST['title'];
$autho = $_POST['autho'];
$category = $_POST['category'];
$picture = $_POST['picture'];

$query = "INSERT INTO `student` VALUES('','$BN','$title','$autho','$category','$picture')";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "data saved well";
} else {
    echo "something went a worng";
}
