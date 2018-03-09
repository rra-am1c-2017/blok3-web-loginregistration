<?php
  // Maak de functie sanitize beschikbaar op deze pagina
  include("./functions/sanitize.php");

  if (!empty($_POST["email"]) && !empty($_POST["password"])) {

    // Maak $_POST["email"] schoon en zet dit in $email
    $email = sanitize($_POST["email"]);

    // Maak $_POST["password"] schoon en zet dit in $password  
    $password = sanitize($_POST["password"]);
    
    include("./db_connect.php");

    $sql = "SELECT * FROM `login` 
            WHERE `email`     = '{$email}'";

    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)) {
      echo "gevonden";
    } else {
      echo "niets gevonden";
    }
  } else {
    header("Location: ./index.php?action=loginform&status=emptyfields");
  }
  

?>