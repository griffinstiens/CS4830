<?php
require_once('../db/config.php');
$conn = connectDB();

extract($_POST);

$UploadedFileName=$_FILES['UploadImage']['name'];
if($UploadedFileName!='')
{
  $upload_directory = "uploads/"; //This is the folder which you created just now
  $TargetPath=time().$UploadedFileName;
  if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath)){
    $QueryInsertFile="INSERT INTO images SET ImageColumnName='$TargetPath'";
    // Write Mysql Query Here to insert this $QueryInsertFile   .
  }
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
