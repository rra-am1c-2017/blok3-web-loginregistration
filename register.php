<?php
  // var_dump($_POST); exit();
  // Maak contact met de database en server

  include("./db_connect.php");
  include("./functions/sanitize.php");
  if (empty($_POST["email"])) {
    header("Location: ./index.php?status=emailempty");
  } else {

    if (isset($_POST["conditions"])) {
      // We maken de vieze $_POST waarden schoon
      $email = sanitize($_POST["email"]);
      $conditions = sanitize($_POST["conditions"]);

      // Hier checken we of het emailadres bestaat in de database. We maken de select query
      $sql = "SELECT * FROM `login` WHERE `email` = '{$email}'";

      // We vuren de query af op de database
      $result = mysqli_query($conn, $sql);

      // Test of het aantal geselecteerde rijen 0 (false) of 1(true)
      if (mysqli_num_rows($result)) {
        // Het emailadres bestaat al in database
        header("Location: ./index.php?status=emailexists");
      } else {    
        // We maken onze query voor het inserten van de formuliergegevens.
        $sql = "INSERT INTO `login` (`id`,
                                    `email`,
                                    `conditions`,
                                    `userrole`)
                    VALUES          (NULL,
                                    '{$email}',
                                    '{$conditions}',
                                    'subscriber')";
        //echo $sql; exit();  
        // We vuren de query af op de database
        mysqli_query($conn, $sql);

        // We sturen nu een mailtje
        mail("adruijter@gmail.com", "Mijn eerste email", "Hallo Wereld!, Dit is mijn eerste mailtje");

        // Stuur de gebruiker door naar index.php
        header("Location: ./index.php?status=succes");
      }
    } else {
      header("Location: ./index.php?status=nocheck");
  }  
} 
?>
