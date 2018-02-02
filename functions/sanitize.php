<?php
 function sanitize($raw_data) {
  // Haal spaties voor en achter de waarde weg
  // https://www.w3schools.com/PhP/func_string_trim.asp
  $raw_data = trim($raw_data);
  // Alle html betekenisvolle tekens worden omgezet naar htmlentities
  // https://www.w3schools.com/PhP/func_string_htmlspecialchars.asp
  $raw_data = htmlspecialchars($raw_data);
  // Escape enkele, dubbele quotjes en backslashes 
  // https://www.w3schools.com/PhP/func_string_addslashes.asp
  $raw_data = addslashes($raw_data);
  return $raw_data;
 }
?>