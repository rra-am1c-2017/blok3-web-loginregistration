<?php
if (isset($_POST["usernamePost"])) {
	// Vraag de gebruiker in unity om een emailadres en password

	// Check of de gebruikersnaam en password combi bekent zijn in de database
	// Als de gebruiker bestaat sla dan zijn id op in een variabele

	// Gebruik dit id om een query op te bouwen die een record wegschrijft naar de tabel
	// game met de volgende velden:
	// user_id, date_time, game_id, score, moeilijkheidsgraad,... 

//Variables for the connection
	$servername = "localhost";
	$server_username =  "root";
	$server_password = "";
	$dbName = "am1c_loginregistration";

// Check of user bestaat
	
//Variable from the user	
	$username = $_POST["usernamePost"]; //"Lucas Test AC";
	$email = $_POST["emailPost"];//"test email";
	$password = $_POST["passwordPost"];//"123456";
	$score = $_POST["score"];
	
	//Make Connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO `game` (`id`, `username`, `email`, `password`, `score`) VALUES (NULL,'". $username . "', '". $email . "', '" . $password . "', '". $score. "')";
	$result = mysqli_query($conn ,$sql);
	
	if(!result) echo "there was an error";
	else echo "Everything ok.";
}

?>