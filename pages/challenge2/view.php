<?php
      //DB details
      require_once('db/config.php');
      $conn = connectDB();

      //Get image data from database
      $query = mysqli_query($conn, "SELECT * FROM images");

      while($rows = mysqli_fetch_array($query))
      {
        $image_name = $rows['image_name'];
        $image_path = $rows['image_path'];
        $image_type = $rows['image_type'];
        $image_size = $rows['image_size'];

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
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>View</title>
  </head>
  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">Challenge 2</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="index.php">Home</a></li>
          <li><a href="view.php">View</a></li>
          <li><a href="about.html">About This Project</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <div class="card large">
              <div class="card-image">
                <img src="<?php echo $image_path; ?>" class="responsive-img" alt="missing image" />
              </div>
              <div class="card-content">
          	     <p><strong>Name: <?php echo $image_name; ?></strong></p>
                 <p><strong>Type: <?php echo $image_type; ?></strong></p>
                 <p><strong>Size (In KB): <?php echo $image_size; ?></strong></p>
              </div>
           </div>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
}
  function connectDB(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
