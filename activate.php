<?php
  // var_dump($_POST);
  include("./functions/sanitize.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);

  // Check op de beide wachtwoordvelden zijn ingevuld met empty() en een if else
  if (!empty($password) && !empty($checkpassword)) {

    // Voor het vergelijken van de twee passwordstrings gebruiken we strcmp();
    if ( !strcmp($password, $checkpassword)) {

      // Wegschrijven naar de database
      include("./db_connect.php");
      $test = "banaan";
      echo "Dit is het gehashte password: " . password_hash($test, PASSWORD_BCRYPT); exit();
    } else {
      header("Location: ./index.php?action=choosepassword&status=choosepassword_identical");
    }
  } else {
    // Terugsturen naar het wachtwoord invulformulier
    header("Location: ./index.php?action=choosepassword&status=choosepasswordfalse");
  }
?>