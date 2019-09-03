<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'tiddies';
    $db_name = 'CS4830';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
      if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
      }
      $sql = 'SELECT * FROM images';
      $query = mysqli_query($conn, $sql);
      if (!$query) {
        die ('SQL error: ' . mysqli_error($conn));
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
    <title>Results</title>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="results.php">Results</a></li>
          <li><a href="index.php">Home</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col s12">

          
        </div>
      </div>
    </div>


  </body>
</html>
