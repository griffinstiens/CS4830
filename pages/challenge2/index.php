
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
          <form action="upload.php" method="post" enctype="multipart/form-data">
              Select File to Upload:
              <input type="file" name="file">
              <input type="submit" name="submit" value="Upload">
          </form>
        </div>

      </div>
    </div>
  </body>
</html>
