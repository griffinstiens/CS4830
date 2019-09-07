<?php
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */

        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'griffin';
        $dbPassword = 'test';
        $dbName     = 'CS4830';

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        $dataTime = date("Y-m-d H:i:s");

        //Insert image content into database
        $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }
    }else{
        echo "Please select an image file to upload.";
    }
}
?>






  <!-- //
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

} //end isset -->






<!-- function connectDB(){
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
} -->
