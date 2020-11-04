<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `students` where email='$username'";
if(isset($_POST['done'])){
$data = mysqli_query($connection, "$query");
// echo $username;
while ($result = mysqli_fetch_array($data)) {
    if ($result['email'] == $username && $result['passwod'] == $password) {
		echo'done';
        //header('location:home.php');
    } else {
		echo $result['email'];
		echo $result['passwod'];
        echo "noo".mysqli_error($connection);
    }
}
}else{echo'tee';}