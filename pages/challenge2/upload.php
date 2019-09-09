<?php
require_once('db/config.php');
$conn = connectDB();

if (isset($_POST['submit'])) {
  $image_name = $_FILES['file']['name'];
  $image_temp = $_FILES['file']['tmp_name'];
  $image_type = $_FILES['file']['type'];
  $image_size = $_FILES['file']['size'];
  $file_error = $_FILES['file']['error'];

  // $file_data = time();
  $image_path = 'uploads/' . $image_name;

    move_uploaded_file($image_temp, $image_path);
    $sql = mysqli_query($conn, "INSERT INTO images (image_name, image_path, image_type, image_size)
    VALUES ('$image_name', '$image_path', '$image_type','$image_size')");

  if($sql) {
    $success = "<p class='success'>Image uploaded successfully!</p>";
    header("Location: index.php?success=".$success);
  } else {
    $error = "Yikes there was an error bro";
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
