<?php
  if(!empty($_GET['id'])){
      //DB details
      require_once('db/config.php');
      $conn = connectDB();

      //Get image data from database
      $result = $db->query("SELECT image_path FROM images WHERE id = {$_GET['id']}");

      if($result->row > 0){
          $imgData = $result->fetch_assoc();
          echo "<img src='".$row['image_path']."' />";
      }else{
          echo 'Image not found...';
      }
  }








  function connectDB(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
