<?php  
  if (isset($_SESSION["id"])) {
    echo '<a href="./index.php?action=home">Home</a> | ';
    switch($_SESSION["userrole"]) {
      case "subscriber":
        echo '<a href="./index.php?action=subscriber_home">subscriber Home</a> | ';
        break;
      case "administrator":
        echo '<a href="./index.php?action=administrator_home">admin Home</a> | ';
        break;
      case "superadmin":
        echo '<a href="./index.php?action=superadmin_home">superadmin Home</a> | ';
        echo '<a href="./index.php?action=administrator_home">Administrator Home</a> | '; 
        echo '<a href="./index.php?action=change_userrole">Verander gebruikersrol</a> | '; 
        break;
      default:
        header("Location: ./index.php?action=home");
        break;
    }

    echo '<a href="./index.php?action=games">Games</a> | ';    
    echo '<a href="./logout.php">Uitloggen</a> | ';
  } else {
    
    echo '<a href="./index.php?action=registerform&amp;status=register">Registreer</a> | ';
    echo '<a href="./index.php?action=loginform&amp;status=login">Inloggen</a> ';
  }
?>