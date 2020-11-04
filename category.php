<?php
include 'connection.php';
$query = "SELECT * FROM `categories`";
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
          <li><a href="book.php">Books</a></li>
          <li><a href="authors.php">Authors</a></li>
          <li class="active"><a href="category.php">Categories</a></li>
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
        <h4 class="header-line">Manage Categories</h4>
        <div class="panel panel-info">
          <div class="panel-heading">
            List of Categories
          </div>
          <div class="panel-body">

            <table class="table table-striped table-hover">
              <tbody>
                <?php while ($row = mysqli_fetch_array($data)) {
                  echo "<tr><td>$row[1]</td><td align='right'><a href='editCategory.php?id=$row[0]'> Edit</a></td><td align='right'> <a href='deleteCategory.php?id=$row[0]'> Delete</a></td></tr>";
                }  ?>
              </tbody>
            </table>

          </div>
        </div>

      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 "">
<p><h4 class=" header-line">Add New Category</h4>
        </p>
        <div class="panel panel-info">
          <div class="panel-heading">
            Category Info
          </div>
          <div class="panel-body">
            <form role="form" method="post" action="addCat.php">
              <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" type="text" name="name" autocomplete="off" required />
              </div>

              <button type="submit" name="create" class="btn btn-info">Create </button>

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