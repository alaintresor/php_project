
  <?php 
session_start();
if (!isset($_SESSION['user_loggedin']) || $_SESSION['user_loggedin'] !== true) {
  header('location:studentlogin.html');
  exit;
}


   ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Userpage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="style.css" rel="stylesheet">
	 <link href="assets/css/font-awesome.css" rel="stylesheet">
	   <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">  
	 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">Talkapp</a> -->
      </div>
      <div class="collapse navbar-collapse text-center" id="myNavbar">
    
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="home.php">Home</a></li>
         <li><a href="issue.php">issued books</a></li>
          <li><a href="#">modify password</a></li>
          <li class=""><a href="student_logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <br><br><br><br><br><br>
      <div class="col-sm-12 text-center jumbotron hidden-sm ">
          <p>DASHBORD</p>
        <hr>
        <p>All issued books:100</p>
	       <p>Returned issued books:100</p>
          <p>Not yet returned issued books:100</p>
      </div>
     
    </div>
  </div>

  <div class="footer jumbotron text-center" style="margin-bottom:0">
    &copycopyright by Nicole</p>
  </div>

</body>

</html>
