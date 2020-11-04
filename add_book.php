<?php
include 'connection.php';
$bn = $_POST['bn'];
$title = $_POST['title'];
$autho = $_POST['author'];
$category = $_POST['category'];


$query = "INSERT INTO `books` VALUES('','$bn','$title','$autho','$category','')";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "<script>alert('data saved well');window.open('book.php','_self')</script>";
} else {
    //echo "<script>alert('something went worng');history.go(-1)</script>";
    echo "string".mysqli_error($connection);
}
