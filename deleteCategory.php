<?php
include 'connection.php';
$id = $_GET['id'];
$query = "DELETE FROM `categories` WHERE `id`='$id'";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "<script>window.open('category.php','_self')</script>";
} else {
    echo "noo";
}
