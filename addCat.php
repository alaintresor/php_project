<?php
include 'connection.php';
$name = $_POST['name'];


$query = "INSERT INTO `categories` (`id`, `name`) VALUES (NULL, '$name');";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "<script>alert('Data saved well'),window.open('category.php','_self')</script>";
} else {
    echo "something went a worng";
}
