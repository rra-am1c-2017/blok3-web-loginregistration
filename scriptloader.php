<?php
  // Maak de sanitize functie beschikbaar.
  include("./functions/sanitize.php");

  if (isset($_GET["status"])) {

    // In dit array staan alle mogelijke javascriptbestandsnamen die geladen mogen.
    $white_list = array("emailempty", "emailexists", "nocheck", "succes");

    $status = sanitize($_GET["status"]);

    // Hier wordt gechecked of $_GET["status"] in array $white_list voorkomt...
    if (in_array($status, $white_list)) {
      // Als het voorkomt laat dan het bij behorende script.
      echo "<script src='./js/registerform/{$status}.js'></script>";
    }
  }
?>