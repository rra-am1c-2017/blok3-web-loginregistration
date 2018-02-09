$(document).ready(function() {
  // Maak het modal met registratieformulier weer zichtbaar
  $("#exampleModalCenter").modal("show");
  $("#exampleInputEmail1").after("<p class='email_error_style'>U heeft geen e-mailadres ingevuld</p>");
  $(".email_error_style").css({"color" : "red",
                               "background-color" : "rgb(220, 220, 220)",
                               "border-radius" : "5px",
                               "margin-top" : "0.5em",
                               "padding" : "0.5em 1em" });
});