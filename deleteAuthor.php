<?php
include 'connection.php';
$id = $_GET['id'];
$query = "DELETE FROM `authors` WHERE `id`='$id'";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "<script>window.open('authors.php','_self')</script>";
} else {
    echo "noo";
}
