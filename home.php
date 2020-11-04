<?php
include'connection.php';
$query = "SELECT count(id) FROM `issuedbookdetail`";
$data = mysqli_query($connection, "$query");

$books=mysqli_query($connection, "SELECT * FROM `books`");
$students=mysqli_query($connection, "SELECT * FROM `students`");
$authors=mysqli_query($connection, "SELECT * FROM `authors`");
$categories=mysqli_query($connection, "SELECT * FROM `categories`");
$null=null;
$returnbook=mysqli_query($connection, "SELECT * FROM `issuedbookdetail` WHERE `returndate`!='$null'");
$notreturnbook=mysqli_query($connection, "SELECT * FROM `issuedbookdetail` WHERE `returndate`='$null'");
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
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="book.php">Books</a></li>
          <li><a href="authors.php">Authors</a></li>
          <li><a href="category.php">Categories</a></li>
          <li><a href="ISSUE.php">issue a book</a></li>
          <li><a href="allStudent.php">All students</a></li>
          <li><a href="admin_change_password.php">modify password</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class=""><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <br><br><br><br><br><br>
      <div class="col-sm-12 text-center jumbotron hidden-sm ">
        <p>System Information</p>
        <hr>
        <p>All books:<?php
           $num=mysqli_num_rows($books);
           echo $num;
         ?></p>
        <p>Returned issued books:<?php
           $num=mysqli_num_rows($returnbook);
           echo $num;
         ?></p>
          <p>Not yet Returned issued books:<?php
           $num=mysqli_num_rows($notreturnbook);
           echo $num;
         ?></p>
        <p>issued books:<?php
           $num=mysqli_num_rows($data);
           echo $num;
         ?></p>
        <p>registration students:<?php
           $num=mysqli_num_rows($students);
           echo $num;
         ?></p>
        <p>authors:<?php
           $num=mysqli_num_rows($authors);
           echo $num;
         ?></p>
        <p>available categories:<?php
           $num=mysqli_num_rows($categories);
           echo $num;
         ?></p>
      </div>
    </div>
  </div>
  <div class="jumbotron text-center" style="margin-bottom:0">
    &copycopyright by Nicole</p>
  </div>
</body>
</html>