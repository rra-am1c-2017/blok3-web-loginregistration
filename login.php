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
      $record = mysqli_fetch_array($result);

      if (password_verify($password, $record["password"])) {
        // loginprocedure

        switch ($_record["userrole"]) {
          case "subscriber":
            header("Location: ./index.php?action=subscriber_home");
            break;
          case "administrator":
            header("Location: ./index.php?action=administrator_home");
            break;
          case "superadmin":
            header("Location: ./index.php?action=superadmin_home");
            break;
          default:
            header("Location: ./index.php?action=home");
            break;
        }





      } else {
        header("Location: ./index.php?action=loginform&status=accessdenied");        
      }
      
    } else {
      header("Location: ./index.php?action=loginform&status=accessdenied");      
    }
  } else {
    header("Location: ./index.php?action=loginform&status=emptyfields");
  }
  

?>