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

        $subject = "Registratie dyslexie.nl";

        $message = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                      <title>Document</title>
                      <style>
                        body { 
                          color : green;
                        }
                      </style>
                    </head>
                    <body>
                      <p>Bedankt voor het registreren, klik <a href="www.inlogregistratiesysteem.am1c.nl/index.php?action=choosepassword">hier</a> om uw account te activeren</p>
                      <p>Met vriendelijke groet,</p>
                      <p>de beheerder van deze site.</p>
                    </body>
                    </html>';

        $headers = "Content-Type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: rra@mboutrecht.nl \r\n";
        $headers .= "Cc: admin@mboutrecht.nl, superadmin@mboutrecht.nl \r\n";
        $headers .= "Bcc: adruijter@gmail.com";


        // We sturen nu een mailtje
        mail($email, $subject , $message, $headers);
        // Stuur de gebruiker door naar index.php
        header("Location: ./index.php?status=succes");
      }
    } else {
      header("Location: ./index.php?status=nocheck");
  }  
} 
?>
