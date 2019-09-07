<?php
  require_once('db/config.php');
  $conn = connectDB();

  $sql = 'SELECT * FROM images';
      $query = mysqli_query($conn, $sql);
      if (!$query) {
        die ('SQL error: ' . mysqli_error($conn));
      }

  if ($query) {
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
          echo "<img src='".$row['image_path']."$image_name' />";

    }
  } else {
    echo "No images found in server :(";
  }







  function connectDB(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
