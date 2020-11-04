<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
//$query = "";
if(isset($_POST['done'])){
$data = mysqli_query($connection, "SELECT * FROM `students` where email='$username' && passwod='$password'");
if (mysqli_num_rows($data)>0) {
    
session_start();
        $_SESSION["user_loggedin"] = true;
         $_SESSION["username"] = $username;
         $_SESSION["password"] = $password;
        header('location:student_home.php');

}else{
    echo "incorrect username or password".mysqli_error($connection);
}
// echo $username;
/*while ($result = mysqli_fetch_array($data)) {
    if ($result['email'] == $username && $result['passwod'] == $password) {
		//echo'done';
		session_start();
		$_SESSION["user_loggedin"] = true;
         $_SESSION["username"] = $username;
         $_SESSION["password"] = $password;
        header('location:student_home.php');
    } else {
		echo $result['email'];
		echo $result['passwod'];
        echo "noo".mysqli_error($connection);
    }
}*/
}else{echo'tee';}