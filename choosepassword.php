<h3>Kies een nieuw password</h3>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

    <form method="post" action="./activate.php">        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
        <div class="form-group">
          <label for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="checkpassword">
          <small id="passwordHelp2" class="form-text text-muted">Voer uw gekozen wachtwoord nogmaals in.</small> 
        </div>
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary">Verzend</button>        
      </div>
      </form>
    </div>
  </div>
</div>