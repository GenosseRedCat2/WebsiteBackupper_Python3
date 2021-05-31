<?php
$servername = "mysql2.webland.ch";
$username = "proletariat_db_schweiz";
$password = "KLJSLKDJJ=)*(=)*7430957720921}}}]][[{{{P:;:__:;_:;()*/)*=)/*=)((/ROLETARIATSCHWEIZ__:;;";
$dbname='proletariat_db_schweiz';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	echo "Connection failed";
  die("Connection failed: " . $conn->connect_error);
}
?>