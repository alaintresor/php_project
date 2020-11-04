<?php
include 'connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM `issuedbookdetail` WHERE `bookid`='$id'";
$data = mysqli_query($connection, "$query");
$query2 = "SELECT * FROM `books` WHERE `BN`='$id'";
//$sql = "SELECT * FROM `authors`";

$data2 = mysqli_query($connection, "$query2");
//$data3 = mysqli_query($connection, "$sql");
$data = mysqli_query($connection, "$query");
while ($row = mysqli_fetch_array($data2)) {
    $oldBn = $row[1];
    $oldTitle = $row[2];
     $author = $row[3];
    $category = $row[4];
}
if (isset($_POST['save'])) {
    $bn = $_POST['bn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $sql2 = "UPDATE `books` SET `title`='$title',`bn`='$bn',`category`='$category',`autho`='$author' WHERE `id`='$id'";
    $done = mysqli_query($connection, "$sql2");
    if ($done) {
        echo "<script>alert('data updated well');window.open('book.php','_self')</script>";
    } else {
        echo "noo" . mysqli_error($connection);
    }
}

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

    </style>
</head>

<body>

    <br> <br> <br> <br>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-12 ">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 ">
                <p>
                    <h4 class=" header-line">Edit Book information</h4>
                </p>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Book Info
                    </div>
                    <div class="panel-body">
                        <form method="post" action="#">
                            <?php
                            echo " <div class='form-group'>
                                <label for='firstname'>Book Number:</label>
                                <input type='text' class='form-control' value='$oldBn' required='' name='bn' placeholder='Enter book number'>
                            </div>
                            <div class='form-group'>
                                <label for='firstname'>Book Title:</label>
                                <input type='text' value='$oldTitle' class='form-control' required='' name='title' placeholder='Enter Book title'>
                            </div>
                             <div class='form-group'>
                                <label for='firstname'>Book Number:</label>
                                <input type='text' class='form-control' value='$oldBn' required='' name='bn' placeholder='Enter book number'>
                            </div>
                            <div class='form-group'>
                                <label for='firstname'>Book Title:</label>
                                <input type='text' value='$oldTitle' class='form-control' required='' name='title' placeholder='Enter Book title'>
                            </div>
                            ";
                            ?>
                        
                               <div class='form-group'>
                                <label for='firstname'>cash(rwf):</label>
                                <input type='text'   class='form-control' required='' name='title' placeholder='Enter Book title'>
                            </div>

                            <a href="book.php"> <button type="button" name="create" class="btn btn-warning">cancel </button></a>
                            <button type="submit" name="save" class="btn btn-info" style="margin-left:5.3cm;">save </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>






</body>

</html>