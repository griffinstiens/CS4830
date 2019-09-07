<?php
require_once('../db/config.php');
$conn = connectDB();

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $file_name = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_error = $_FILES['file']['error'];
  $file_data = time();
  $file_path = '../uploads';

  move_uploaded_file($fileTmpName, $file_path.'/'.$file_name);
  $sql = "INSERT INTO images (file_path, file_size, file_type, file_data) VALUES ('$file_path', '$file_size', '$file_type','$file_data')";

  if(mysqli_query($sql)) {
    echo "Success!";
  } else {
    echo "Fuck pls work";
  }

  if (empty($_FILES['file'])) {
    echo "<h3 class='center'>You must select an image to upload.</h3>"
  } else {

  }






  //
  // $file_Ext = explode('.', $file_name);
  // $file_Actual_Ext = strtolower(end($file_Ext));
  //
  // $allow = array('jpg','jpeg','png');
  //
  // if (in_array($file_Actual_Ext, $allow)) {
  //   if ($file_error === 0) {
  //     if ($file_size < 1000000) {
  //       $new_file_name = uniqid('', true).".".$file_Actual_Ext;
  //       $target_destination = '../uploads/'.$new_file_name;
  //       $sql = "INSERT INTO images (file_path, file_size, file_type, file_data) VALUES ('$target_destination', '$file_size', '$file_type','$file_data')";
  //       if(mysql_query($sql)) {
  //         move_uploaded_file($_FILES);
  //       }
  //
  //       header("Location: ../index.php?uploadSuccess");
  //       echo "Success";
  //     } else {
  //       echo "Your file is too big";
  //     }
  //   } else {
  //     echo "There was an error uploading your image.";
  //   }
  //
  // } else {
  //   echo "Unsupported file type. Please only upload .jpg,.jpeg,.png";
  // }

} //end isset






function connectDB(){
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

?>
