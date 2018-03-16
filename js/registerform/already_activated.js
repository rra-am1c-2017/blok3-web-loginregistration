$(document).ready(function () {
  $("#exampleModalCenter").modal("show");
  $(".modal-header").empty();
  $(".modal-body").html('<div class="alert alert-danger" role="alert">U account is al geactiveerd. U wordt doorgestuurd om in te kunnen loggen</div>');
  $(".modal-footer").empty();

  setTimeout(function () {
    window.location.replace("./index.php?action=loginform&status=login");
  }, 3000)
  


});