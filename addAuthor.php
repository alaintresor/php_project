<?php
include 'connection.php';
$name = $_POST['name'];


$query = "INSERT INTO `categories` (`id`, `name`) VALUES (NULL, '$name');";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "<script>alert('data saved well');window.open('authors.php','_self')</script>";
} else {
    echo "<script>alert('something went a worng');history.go(-1)</script>";
}
