$(document).ready(function () {
  $("#exampleModalCenter").modal("show");

  var info = $('<div class="alert alert-info" role="alert">Uw beide wachtwoorden zijn niet gelijk, <br>probeer het opnieuw.</div>');

  $("#info").after(info);
});