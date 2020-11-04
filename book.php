<?php
include 'connection.php';
$query = "SELECT * FROM `books`";
$data = mysqli_query($connection, "$query");
$query2="SELECT * FROM `categories`";
$sql="SELECT * FROM `authors`";

$data2= mysqli_query($connection,"$query2");
$data3= mysqli_query($connection,"$sql");
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
          <li><a href="home.php">Home</a></li>
          <li class="active"><a href="book.php">Books</a></li>
          <li><a href="authors.php">Authors</a></li>
          <li ><a href="category.php">Categories</a></li>
          <li><a href="issue.php">issue a book</a></li>
          <li><a href="student.php">All students</a></li>
          <li><a href="#">modify password</a></li>

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
        <div class=" col-md-8 col-sm-8 col-xs-12 "">
        <h4 class="header-line">Manage Books</h4>
        <div class="panel panel-info">
          <div class="panel-heading">
            List of Books
          </div>
          <div class="panel-body">

            <table class="table table-striped table-hover">
              <tbody>
                  <thead>
                      <tr><th>BN</th><th>Title</th><th>Author</th><th>Category</th></tr>
                  </thead>
                <?php while ($row = mysqli_fetch_array($data)) {
                  echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td align='right'><a href='editBook.php?id=$row[0]'> Edit</a></td><td align='right'> <a href='deleteBook.php?id=$row[0]'> Delete</a></td></tr>";
                }  ?>
              </tbody>
            </table>

          </div>
        </div>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 "">
<p><h4 class=" header-line">Add New Book</h4>
        </p>
        <div class="panel panel-info">
          <div class="panel-heading">
            Book Info
          </div>
          <div class="panel-body">
          <form   method="post" action="add_book.php">
                
                <div class="form-group">
                    <label for="firstname">Book Number:</label>
                    <input type="text" class="form-control" required='' name="bn" placeholder="Enter book number">
                </div>
                <div class="form-group">
                    <label for="firstname">Book Title:</label>
                    <input type="text" class="form-control" required='' name="title" placeholder="Enter Book title">
                </div>
                <div class="form-group">
                    <label for="gender">Book Author:</label>
                    <select class="form-control" name="author">
                        <option class="disabled">......</option>
                        <?php 
                        while($row=mysqli_fetch_array($data3)){
                           echo "<option>$row[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gender">Book Category:</label>
                    <select class="form-control" name="category">
                        <option class="disabled">......</option>
                        <?php 
                        while($row=mysqli_fetch_array($data2)){
                           echo "<option>$row[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                

                <div class="form-group">
                    <input type="submit" class="btn btn-primary from-control" value="Add" name="done">
                </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>




  <div class="jumbotron text-center" style="margin-bottom:0">
    &copycopyright by Nicole</p>
  </div>

</body>

</html>