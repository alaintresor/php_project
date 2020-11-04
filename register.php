 <?php
           
           include "connection.php";
		   $usename=$_POST['username'];
              $passwod=$_POST['password'];
              $email1=$_POST['email'];
             $query1="select id from `studentid`";
			 $studentid = "";
			 $studentidup = "";
             if(isset($_POST['done']))
             {
				$data=mysqli_query($connection,"$query1"); 
				while($result = mysqli_fetch_array($data)){
					//echo$result['id'];
					if($result['id']!=null){
						$studentid="SID0".$result['id'];
						$studentidup=$result['id']+1;
					echo$studentid;
					 $query=mysqli_query($connection,"INSERT INTO students(studentid,full_name,email,passwod) VALUES ('$studentid','$usename','$email1','$passwod')");
             if ($query) {
				        $data2=mysqli_query($connection,"Update `studentid` set id='$studentidup'"); 
				         if($data2){
							 ?>
							 <script>
							 
							 </script>
							 
							 
							 <?php
							 echo'dealdone';
						 }
			            }
					}
					
				}
				
			 }
				
              /* 
             $query=mysqli_query("INSERT INTO students(full_name,email,passwod) VALUES ('$usename','$email','$passwod')");
             if ($query) {
               ?>

              <b style='color:blue; font-size:70px; margin-top: 120px;'><center>MURAKOZE!!!!!!!! Inyunganizi Yawe Twayibonye.  loading.......</center></b>
 <?php
               // refresh('location: index.php');
               header("refresh: 5; url=index.php");
                      }
                      else  {
                       // echo "<b>"."string".mysql_error();
                      }}
                      else
                      {
                       // echo "teee".mysql_error();
                      }


           */      
              ?>
