 <?php  
include 'connection.php';

$bookid = $_POST['book_id'];
$studentid=$_POST['stu_id'];
 //$query1="";
if(isset($_POST['issueBook'])){
$data=mysqli_query($connection, "SELECT * from `students`");
if($data!=null){
$data1=mysqli_query($connection, "SELECT * from `students` WHERE studentid='$studentid'");	
if (mysqli_num_rows($data1)>0) {
   
  $data2=mysqli_query($connection, "SELECT * from `books` WHERE BN='$bookid'");
  if (mysqli_num_rows($data2)) {

  	$query_insert=mysqli_query($connection, "INSERT INTO  issuedbookdetail(bookid,studentid) values('$bookid','$studentid')");
  	if ($query_insert) {
  		header('location:issue.php');
  	}

  }else{

  	echo "book with this id is not available";
  }


}else{
	echo"this student id is not available";
} 

}else{
  	echo "Student list is empty";
  }

}


 ?>