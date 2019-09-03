<?php
require_once('../db/config.php');
$conn = connectDB();

$imagePath = $_POST['imagePath'];
$imageSize = $_POST['imageSize'];
$imageType = $_POST['imageType'];
$imageDate = $_POST['imageDate'];


$destination = "uploads/";
$target_file = $destination . basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;

$imageType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg"
&& $imageType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOK === 0) {
  echo "Image upload unsuccessful.";
} else {

}


header("Location: ../index.php");






function connectDB(){
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

?>
