<?php
  //  var_dump($_POST);
  //   Maak contact met de database en server

  include("./db_connect.php");
  include("./functions/sanitize.php");

  // We maken de vieze $_POST waarden schoon
  $email = sanitize($_POST["email"]);
  $conditions = sanitize($_POST["conditions"]);
  
  // We maken onze query voor het inserten van de formuliergegevens.
  $sql = "INSERT INTO `login` (`id`,
                               `email`,
                               `conditions`,
                               `userrole`)
          VALUES              (NULL,
                              '{$email}',
                              '{$conditions}',
                              'subscriber')";
  //echo $sql; exit();  
  // We vuren de query af op de database
  mysqli_query($conn, $sql);
  
  echo "<h1>U bent geregistreerd, u ontvangt een email met een activatielink</h1>";
  header("Refresh:2; ./index.php"); 
?>
