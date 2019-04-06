<?php
session_start();
if (isset($_POST["avatarNamePost"])) {
//Variables for the connection
	include("./connect_db.php");

	
//Variable from the user	
	$avatarName = $_POST["avatarNamePost"];
	$age = $_POST["agePost"];
	$score = $_POST["score"];
	$userID = $_SESSION["id"];
	
	date_default_timezone_set("Europe/Amsterdam");
	$datetime = date('Y-m-d H:i:s'); 
	
	
	//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO `game` (`id`, `avatarName`, `age`, `score`, `datetime`, `userID`) VALUES (NULL,'". $avatarName . "', '". $age . "', '" . $score . "', '" . $datetime. "', '" . $userID . "')";

	$result = mysqli_query($conn ,$sql);

	if(!$result) echo "Dataopslag is mislukt";
	else echo "Data opgeslagen in tabel game";
}

?>