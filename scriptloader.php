<?php
  // Maak de sanitize functie beschikbaar...
  include("./functions/sanitize.php");

  // Check of de $_GET["status"] bestaat
  if (isset($_GET["status"])) {
    // Als de $_GET["status"] variabele bestaat maak hem dan schoon
    $status = sanitize($_GET["status"]);
    
  /* *******************************************************************************
   * In dit array staan alle mogelijke javascriptbestandsnamen die geladen mogen.
   * Het is een array whitelist 
   *********************************************************************************/
    
    // echo "Password: " . $password . "<br>";
    $white_list = array("emailempty","emailexists","nocheck", "success", "choosepassword", "choosepasswordfalse","choosepassword_identical", "activate_success", "register", "login", "emptyfields", "accessdenied", "already_activated" );    

    if (in_array($status, $white_list)) {
        echo "<script src='./js/registerform/{$status}.js'></script>";
    }
  }
?>