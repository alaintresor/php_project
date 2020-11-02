<!DOCTYPE html>
<html lang="en">

<head>
  <title>TalkApp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <li><a href="add_book.html">Add Book</a></li>
          <li><a href="frend.php">View</a></li>
          <li><a href="msg.php">Edit</a></li>
          <li><a href="#">Notification</a></li>

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
      <div class="col-sm-4 text-center jumbotron hidden-sm hidden-xs">


        <p>Labery Information</p>

        <hr>
        <p>All books:100</p>
        <p>Avaible books:70</p>
        <p>browed books:30</p>
      </div>
      <div class="col-sm-8">
        <div>
          <h2>TITLE HEADING</h2>
          <h5>Title description, Dec 7, 2017</h5>
          <div class="fakeimg">Fake Image</div>
          <p>Some text..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg">Fake Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </div>
  </div>

  <div class="jumbotron text-center" style="margin-bottom:0">
    &copycopyright by TalkApp.com</p>
  </div>

</body>

</html>