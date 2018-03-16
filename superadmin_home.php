<?php
  $userrole = array("superadmin");
  include("./security.php");
?>

<h1>Superadmin Home</h1>
<?php
  if (isset($_SESSION["email"])) {
    echo "Welkom " . $_SESSION["email"];
  }
?>