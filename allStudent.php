
<?php
include 'connection.php';
$query = "SELECT * FROM `students`";
$data = mysqli_query($connection, "$query");
?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <title>TalkApp</title>
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
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">rs.php
          <li><a href="home.php">Home</a></li>
          <li><a href="add_book.html">Books</a></li>
          <li><a href="authors.php">Authors</a></li>
          <li><a href="category.php">Categories</a></li>
		  <li><a href="issue.php">issue a book</a></li>
		  <li  class="active"><a href="#">All students</a></li>
          <li><a href="admin_change_password.php">modify password</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class=""><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <br> <br> <br> <br>
         <div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12"">

 <h4 class="header-line">Manage All students</h4>
        <div class="panel panel-info">
          <div class="panel-heading">
            List of Books
          </div>
          <div class="panel-body">

            <table class="table table-striped table-hover">
              <tbody>
                  <thead>
                      <tr><th>Studentid</th><th>FULL NAME</th><th>EMAIL</th><th>REG DATE</th></tr>
                  </thead>
                <?php while ($row = mysqli_fetch_array($data)) {
                  //$returndate=$row['returndate'];
                  ?>
                  <tr><td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td><td><?php echo $row[5]; ?></td><td align='right'><!--<a href='issueUpdate.php?id=<?php echo $row[1] ?>'> Edit</a>--></td><td align='right'> <a href='deleteStudent.php?id=<?php echo $row[0] ?>'> Delete</a></td></tr>
                  <?php
                }  ?>
              </tbody>
            </table>

          </div>
        </div></div>

        </div>
   
    
  
	
  <div class="jumbotron text-center" style="margin-bottom:0">
    &copycopyright by Nicole</p>
  </div>

</body>

</html>