<?php
  require_once('db/config.php');
  $conn = connectDB();

  $sql = 'SELECT * FROM images';
      $query = mysqli_query($conn, $sql);
      if (!$query) {
        die ('SQL error: ' . mysqli_error($conn));
      }

$result = mysqli_query("SELECT * FROM images");

  while($row = mysql_fetch_array($result))
  {
    echo "<img src='".$row['image']."' />";
  }






  function connectDB(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
