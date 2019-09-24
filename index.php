<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
      body {
        background-color: #757575;
      }

      p, h1, h2 {
        font-family: 'Lobster', cursive;
      }

      div.card-panel.test {
        width: 300px;
        height: 80px;
        margin: 0px;
        padding-top: 1px;
      }

    </style>
    <title>CS4830</title>
  </head>
  <body>
    <div class="container"
      <div class="row">
        <div class="col s12">
            <div class="card-panel grey lighten-5 z-depth-1">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="images/griffin.jpeg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                  <h2 class="mine">Griffin C. Stiens</h2><br>
                  <span class="black-text">
                    This will serve as the hub for all projects completed in CS4830. Click the "Challenge 1" button below
                    to see the first challenge!
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12 m5 l6">
            <div class="card-panel test">
              <p class="center black-text flow-text"><a href="pages/firstChallenge.html">Challenge 1</a></p>
            </div>
            <br>
            <div class="card-panel test">
              <p class="center black-text flow-text"><a href="pages/challenge2/index.php">Challenge 2</a></p>
            </div>
            <br>
            <div class="card-panel test">
              <p class="center black-text flow-text"><a href="pages/exploration1/index.html">Exploration 1</a></p>
            </div>
            <br>
            <div class="card-panel test">
              <p class="center black-text flow-text"><a href="pages/challenge3/index.html">Challenge 3</a></p>
            </div>
          </div>

          <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-content">
                  <a class="card-title activator grey-text text-darken-4">Challenge #1<i class="material-icons right">settings</i></a>
                  <p>Please select the cog wheel to read about this project.</p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                  <p>This was the first challenge in CS4830 - Web Application Development II. The purpose of this
                  particular assignment was to demonstrate the ability to configure an AWS server and display a web page.</p>
                </div>
            </div>
          </div>



      </div> <!--end row-->



    </div>
    <script>
  M.AutoInit();


  </script>
  </body>
</html>
