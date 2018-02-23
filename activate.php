<?php
  // var_dump($_POST);
  include("./functions/sanitize.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);
  $id            = sanitize($_POST["id"]);

  // Check op de beide wachtwoordvelden zijn ingevuld met empty() en een if else
  if (!empty($password) && !empty($checkpassword)) {

    // Voor het vergelijken van de twee passwordstrings gebruiken we strcmp();
    if ( !strcmp($password, $checkpassword)) {

      // Wegschrijven naar de database
      include("./db_connect.php");

      $password_hash = password_hash($password, PASSWORD_BCRYPT);

      $sql = "UPDATE `login` SET `password`  = '{$password_hash}',
                                 `activated` = 'yes'
                           WHERE `id` = " . $id;
      //echo $sql; exit();
      mysqli_query($conn, $sql);

      // Stuur door naar index.php en laad choosepassword in de body van index.php
      header("Location: ./index.php?action=choosepassword&status=activate_success");

    } else {
      header("Location: ./index.php?action=choosepassword&status=choosepassword_identical");
    }
  } else {
    // Terugsturen naar het wachtwoord invulformulier
    header("Location: ./index.php?action=choosepassword&status=choosepasswordfalse");
  }
?>