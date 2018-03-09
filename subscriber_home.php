<h1>Subscriber Home</h1>
<?php
  if (isset($_SESSION["email"])) {
    echo "Welkom " . $_SESSION["email"];
  }
?>