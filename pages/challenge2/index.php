<?php
require_once('db/config.php');
$conn = connectDB();

function connectDB(){
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Zetta|Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Erica+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Challenge 2</title>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo center">Challenge 2</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="view.php">View</a></li>
          <li><a href="about.html">About This Project</a></li>
        </ul>
      </div>
    </nav>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <div class="card">
              <div class="card-content">
                <p class="flow-text">Here is the second challenge. Click the button below to upload an image! After you receive
                a success message, go to the 'View' page to see your image.</p>
                <?php if(isset($_GET['success']))?><?php echo "<div class='success'>"?><?php echo $_GET['success'];?><?php echo '</div>';?>
                <?php if(isset($_GET['error'])) echo $_GET['error'];?>
                <?php if(isset($_GET['empty'])) echo $_GET['empty'];?>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Choose an Image:
                    <input type="file" name="file">
                    <input type="submit" name="submit" value="Upload">
                </form>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l6">
            <h1 class="center">Photo Uploader</h1>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
