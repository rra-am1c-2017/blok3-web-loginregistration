// Trigger een anonieme functie als de pagina klaar is met laden.
$(document).ready(function() {
  // Maak het modal met registratieformulier weer zichtbaar
  $("#exampleModalCenter").modal("show");


  $(".form-check").after("<div class='checkbox_error_style'>Ga akkoord met de algemene voorwaarden.</div>");
  $(".checkbox_error_style").css({"color" : "red",
                                  "background-color" : "rgb(220, 220, 220)",
                                  "border-radius" : ".25rem",
                                  "border" : "1px solid #ced4da",
                                  "margin-top" : "0.5em",
                                  "padding" : ".375rem .75rem" });
});