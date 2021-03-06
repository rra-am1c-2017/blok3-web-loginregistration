<?php
  
  include("./db_connect.php");
 
  if (isset($_GET["id"])) {

   $sql = "SELECT * FROM `login` WHERE `id` = {$_GET["id"]}";

   $result = mysqli_query($conn, $sql);

   $record = mysqli_fetch_array($result, MYSQLI_ASSOC);

   if ( !strcmp($record["activated"], "yes")) {
      header("Location: ./index.php?action=home");
      exit();
   }
  }

?>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

    <form method="post" action="./activate.php">        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Kies een nieuw wachtwoord</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          <small id="passwordHelp1" class="form-text text-muted">Voer een veilig wachtwoord in.</small>          
        </div>
        <div class="form-group" id="info">
          <label for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="checkpassword">
          <small id="passwordHelp2" class="form-text text-muted">Voer uw gekozen wachtwoord nogmaals in.</small> 
        </div>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary">Verzend</button>        
      </div>
      </form>
    </div>
  </div>
</div>