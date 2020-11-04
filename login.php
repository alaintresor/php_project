<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `admin`";
if(isset($_POST['done'])){
$data = mysqli_query($connection, "$query");
// echo $username;
while ($result = mysqli_fetch_array($data)) {
    if ($result['username'] == $username && $result['password'] == $password) {
        header('location:home.php');
    } else {
		echo $result['username'];
		echo $result['password'];
        echo "noo".mysqli_error($connection);
    }
}
}else{echo'tee';}