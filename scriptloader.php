<?php
  if (isset($_GET["status"])) {

    // In dit array staan alle mogelijke javascriptbestandsnamen die geladen mogen.
    $white_list = array("emailempty", "emailexists", "nocheck", "succes");

    echo in_array($_GET["status"], $white_list); exit();

    echo "<script src='./js/registerform/{$status}.js'></script>";
    

    // if ($_GET["status"] == "succes") {
    //   echo "<script src='./js/registerform/succes.js'></script>";
    // } else if ($_GET["status"] == "emailexists") {
    //   echo "<script src='./js/registerform/emailexists.js'></script>";
    // } else if ($_GET["status"] == "nocheck") {
    //   echo "<script src='./js/registerform/nocheck.js'></script>";
    // } else if ($_GET["status"] == "emailempty") {
    //   echo "<script src='./js/registerform/emailempty.js'></script>";
    // } 
  }
?>