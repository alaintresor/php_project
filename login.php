<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `admin` ";

$data = mysqli_query($connection, "$query");
// echo $username;
while ($result = mysqli_fetch_array($data)) {
    if ($result[0] == $username && $result[1] == $password) {
        header('location:home.php');
    } else {
        echo "noo";
    }
}
