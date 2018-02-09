<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inlogregistratiesysteem</title>
  </head>
  <body>    
    <main class="container">
      <h1>Inlogregistratiesysteem</h1>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Registreer
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="./register.php" method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registreer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mailadres</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="geef uw e-mailadres" name="email">
                    <small id="emailHelp" class="form-text text-muted">Wij zullen uw e-mailadres niet delen met anderen</small>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="conditions">
                    <label id="lblcheck" class="form-check-label" for="exampleCheck1">Ik ga akkoord met de algemene voorwaarden</label>
                  </div>
                  
                
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Verzend</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php
      if (isset($_GET["status"])) {
        if ($_GET["status"] == "succes") {
          echo "<script src='./js/registerform/succes.js'></script>";
        } else if ($_GET["status"] == "emailexists") {
          echo "<script src='./js/registerform/emailexists.js'></script>";
        } else if ($_GET["status"] == "nocheck") {
          echo "<script src='./js/registerform/nocheck.js'></script>";
        } else if ($_GET["status"] == "emailempty") {
          echo "<script src='./js/registerform/emailempty.js'></script>";
        } 
      }
    ?>
  </body>
</html>