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
    <div class="container">
      <img src="<?php echo $image_path; ?>" alt="" title="<?php echo $image_name; ?>" />
	     <p><strong>Name:<?php echo $image_name; ?></strong></p>
       <p><strong>Type:<?php echo $image_type; ?></strong></p>
       <p><strong>Size (In KB):<?php echo $image_size; ?></strong></p>

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
