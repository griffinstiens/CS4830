<?php
list($size, $width, $height, $type, $attr) = getimagesize("wallpaper1.png");
$bytes = filesize("wallpaper1.png");
// Displaying dimensions of the image

if ($bytes >= 1024) {
  $bytes = number_format($bytes / 1024, 2) . ' KB';
}
elseif ($bytes >= 1048576) {
  $bytes = number_format($bytes / 1048576, 2) . ' MB';
}
else {
  $bytes = 0;
}
echo "Size is : " . $bytes . "<br>";
echo "Width of image : " . $width . "<br>";

echo "Height of image : " . $height . "<br>";

echo "Image type :" . $type . "<br>";

echo "Image attribute :" .$attr;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Zetta|Quicksand&display=swap" rel="stylesheet">

    <title>Image Uploader</title>
    <style>
      h1 {
        font-family: 'Lexend Zetta', sans-serif;
      }

      p {
        font-family: 'Quicksand', sans-serif;

      }

      input {
        border: none;
        border-radius: 2px;
        display: inline-block;
        height: 36px;
        line-height: 36px;
        padding: 0 16px;
        text-transform: uppercase;
        vertical-align: middle;
        -webkit-tap-highlight-color: transparent;
      }
    </style>
  </head>
  <body>

    <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="results.php">Results</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1 class="center">Challenge 2</h1>
          <p class="flow-text">Here is the second challenge. Click the button below to upload an image! After you receive
          a success message, go to the 'Results' page to see your image.</p>
          <form action="scripts/add_image.php" method="post" enctype="multipart/form-data">
              Select image to upload:
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" name="submit">
          </form>
        </div>

      </div>
    </div>
  </body>
</html>
