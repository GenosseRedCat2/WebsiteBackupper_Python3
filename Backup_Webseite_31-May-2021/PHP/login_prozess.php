<?php

session_start();
if($_SESSION["DIRECTION"] == "zugang.php"){

//Sicher stellen, dass man nicht direkt hier zugreifen kann, mittels session "per zugang gekommen" == true;
//Entweder alles azeige oder nüt


$ID_nummer = $_POST["ID_nummer"];
$passwort = $_POST["passwort"];

if( !empty( $ID_nummer ) ) {
	//echo "ID_nummer is not empty. It's filled with: <br>" . $ID_nummer ."<br><br>";

	$stripped_ID_nummer = strip_tags($ID_nummer);
}
else{
	echo "<h2>ID_nummer is empty.</h2><br>";
	//send back to login page
}

if( !empty( $passwort ) ) {
	//echo "passwort is not empty. It's filled with: <br>" . $passwort ."<br><br>";


	$stripped_hashed_passwort = hash('sha512', strip_tags($passwort));
	//echo $stripped_hashed_passwort . "<br>";

}
else{
	echo "<h2>passwort is empty.</h2><br>";
	//send back to login page

}
//Only executes if the things at the top don't cause any problems.


//connect to DB 
include "../PHP/db_zugang.php";




$sql_konto = 'SELECT ID_nummer, passwort, banned, last_login FROM tbl_konto WHERE ID_nummer=? AND passwort=? AND banned="0"';

		$login_statement = $conn->prepare($sql_konto);
		$login_statement->bind_param("ss", $stripped_ID_nummer, $stripped_hashed_passwort);
		$login_statement->execute(); //Befehl wird ausgeführt

		
		$Kontodaten_DB_gefetched = $login_statement->get_result();
		$login_statement->close();


	while($row = $Kontodaten_DB_gefetched->fetch_assoc()) {
		$Konto_ID = $row["ID_nummer"];
	}

//Wenn die geholten der Datenbank nicht vorhanden sind, 
//wird der Benutzer ins Home zurück geschickt.
if (mysqli_num_rows($Kontodaten_DB_gefetched)!=1) { 


	//Zugang nicht erfolgreich
	echo "Passwort falsch!";
	$_SESSION["Anmeldungsstatus"] = "LOGIN_FALSCH";
	header("Location: ../HTML/zugang.php");
  	exit();
  	
} else{

	//Zugang erfolgreich
	$_SESSION["Anmeldungsstatus"] = "JA";
	$_SESSION["Konto_ID"] = $Konto_ID;

$login_date_query = 'UPDATE tbl_konto SET last_login = now() WHERE ID_nummer = "' . $Konto_ID . '"';

	$conn->query($login_date_query);
	
	header("Location: ../HTML/beitrag_erstellen.php");
	}





} else{
	echo "<br> Error 401 <br>";
	echo $_SESSION["Anmeldungsstatus"];
}


?>