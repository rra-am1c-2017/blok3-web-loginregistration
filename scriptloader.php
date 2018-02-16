<?php
  // Maak de sanitize functie beschikbaar...
  include("./functions/sanitize.php");

  // Check of de $_GET["status"] bestaat
  if (isset($_GET["status"])) {
    // Als de $_GET["status"] variabele bestaat maak hem dan schoon
    $status = sanitize($_GET["status"]);
    
  /* *******************************************************************************
   * In dit array staan alle mogelijke javascriptbestandsnamen die geladen mogen.
   * Het is een array whitelist die twee andere array's bevat
   *********************************************************************************/
    
    $white_list = array("registerform" => array("emailempty",
                                                "emailexists",
                                                "nocheck", 
                                                "success"),
                        "passwordform" => array("choosepassword"));    


    foreach ( $white_list as $mapname => $filename_array) {
      if (in_array($status, $filename_array)) {
        echo "<script src='./js/{$mapname}/{$status}.js'></script>";        
      }
    }
  }
?>