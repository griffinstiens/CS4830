<?php
      //DB details
      require_once('db/config.php');
      $conn = connectDB();

      //Get image data from database
      $query = mysqli_query($conn, "SELECT * FROM images");
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
    <link href="https://fonts.googleapis.com/css?family=Lato:100&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>View</title>
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
    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php">Home</a></li>
      <li><a href="view.php">View</a></li>
      <li><a href="about.html">About This Project</a></li>
    </ul>

    <div class="container">

      <div class="row">
        <div class="col s12">

          <?php while($rows = mysqli_fetch_array($query))
          {
            $image_name = $rows['image_name'];
            $image_path = $rows['image_path'];
            $image_type = $rows['image_type'];
            $image_size = $rows['image_size']; ?>

          <div class="card">
              <div class="card-image">
                <img src="<?php echo $image_path; ?>" class="responsive-img" alt="missing image" />
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Image<i class="material-icons right">settings</i></span>
                <p>Please select the cog wheel to the right to display photo information.</p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                <p><b>Name: <?php echo $image_name; ?></b></p>
                <p><b>Type: <?php echo $image_type; ?></b></p>
                <p><b>Size (In KB): <?php echo $image_size; ?></b></p>
              </div>
           </div>
           <?php
           } ?>
        </div>
      </div>


    </div>



  <script>
  M.AutoInit();


  </script>
  </body>
</html>

<?php
  function connectDB(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
