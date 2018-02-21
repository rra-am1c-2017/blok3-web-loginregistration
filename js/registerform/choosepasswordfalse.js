$(document).ready(function () {
  $("#exampleModalCenter").modal("show");

  var info = $('<div class="alert alert-info" role="alert">Een van de velden is leeg , <br>vul beide velden in.</div>');

  $("#info").after(info);
});