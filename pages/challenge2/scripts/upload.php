<?php
require_once('../db/config.php');
$conn = connectDB();

list($size, $width, $height, $type, $attr) = getimagesize("file");
$file_size = filesize("file");

if ($file_size >= 1024) {
  $file_size = number_format($file_size / 1024, 2) . ' KB';
}
elseif ($file_size >= 1048576) {
  $file_size = number_format($file_size / 1048576, 2) . ' MB';
}
else {
  $file_size = 0;
}
// echo "Size is : " . $bytes . "<br>";
// echo "Image type :" . $type . "<br>";
// echo "Image attribute :" .$attr;

$file_path = 'uploads/'
$type = $file_type;
$file_date = time();
$destination = "uploads/";
$target_file = $destination . basename($_FILES["UploadFile"]["name"]);
$uploadOK = 1;

$imageType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["UploadFile"]["tmp_name"]);
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
if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg"
&& $file_type != "gif" ) {
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
