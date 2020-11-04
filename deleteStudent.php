<?php
include 'connection.php';
$id = $_GET['id'];
$query = "DELETE FROM `students` WHERE `id`='$id'";
$done = mysqli_query($connection, "$query");
if ($done) {
    echo "<script>window.open('allStudent.php','_self')</script>";
} else {
    echo "noo";
}
