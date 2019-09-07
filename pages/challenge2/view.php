<?php
  require_once('db/config.php');
  $conn = connectDB();

  $result = $db->query("SELECT image_path FROM images WHERE id = {$_GET['id']}");

  if($result->num_rows > 0){
       $imgData = $result->fetch_assoc();

       //Render image
       header("Content-type: image/jpg");
       echo $imgData['image'];
   }else{
       echo 'Image not found...';
   }








  function connectDB(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
?>
