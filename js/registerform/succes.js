$(document).ready(function() {
  // Dit laat het formulier verdwijnen in de modal-body
  $(".modal-body").empty().text("U bent succesvol geregistreerd. U krijgt een email gestuurd met activatielink.");
  $(".modal-footer").empty();
  $("#exampleModalCenter").modal('show');

  setTimeout(function () {
    alert("3 seconden verstreken");
  }, 3000);
});