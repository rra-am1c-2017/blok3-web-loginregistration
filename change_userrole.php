<?php
  // Beveiliging van de pagina
  $userrole = array("superadmin");
  include("./security.php");
  
  // We gaan de data binnenhalen van alle gebruikers
  include("./db_connect.php");

  // We maken de selectie-query voor alle gebruikers
  $sql = "SELECT * FROM `login`";

  // We vuren de query af op de database en krijgen iets terug
  $result = mysqli_query($conn, $sql);

  $tableContent = '';

  while ( $record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tableContent .= '<tr>
                        <th scope="row">' . $record["id"] . '</th>
                        <td>' . $record["email"] . '</td>
                        <td>' . $record["userrole"]  .'</td>
                        <td>
                          <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect04">
                              <option value="subscriber">subscriber</option>
                              <option value="superadmin">superadmin</option>
                              <option value="administrator">administrator</option>
                            </select>
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button">Button</button>
                            </div>
                          </div>
                        </td>
                      </tr>';
  }


 
?>

<div class="container">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">E-mail</th>
      <th scope="col">Gebruikersrol</th>
    </tr>
  </thead>
  <tbody>
    <?php echo $tableContent; ?>
  </tbody>
</table>
    
    
    
    
    
    
    
    </div>
    <div class="col-2"></div>
  </div>
</div>

