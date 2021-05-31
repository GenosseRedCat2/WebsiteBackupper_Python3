<?php
session_start();
if($_SESSION["Anmeldungsstatus"] == "JA"){

$hashtags = $_POST["hashtags"];

//Image upload
$image_name = "image.jpg";

//Deutsch
$de_titel = $_POST["de_titel"];
$de_text = $_POST["de_text"];
//Englisch
$en_titel = $_POST["en_titel"];
$en_text = $_POST["en_text"];


//Probleme mit Apostroph bim Englisch. SQL injection


//Französisch
$fr_titel = $_POST["fr_titel"];
$fr_text = $_POST["fr_text"];
//Italienisch
$it_titel = $_POST["it_titel"];
$it_text = $_POST["it_text"];


//Connect to DB
include "../PHP/db_zugang.php";








$target_dir = "../IMG/";
$fileName=$_FILES["bild_name"]["name"];
$target_file = $target_dir . $_FILES["bild_name"]["name"];

echo $target_file;

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = mime_content_type($_FILES["bild_name"]["tmp_name"]);
$check = explode("/", $check)[0];
echo $check;
if($check == "image") {
	echo "File is an image - " . $check . ". <br>";

	$uploadOk = 1;

} else {
	echo "File is not an image.";
	$uploadOk = 0;
}

if (move_uploaded_file($_FILES["bild_name"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["bild_name"]["name"])). " has been uploaded.";
    	$bild_name = $fileName;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }







//Gets the highest List ID and adds one.
$getHighestListID = "SELECT * FROM tbl_articles_main ORDER BY ID DESC LIMIT 1";
$getHighestListID_command = $conn->query($getHighestListID);	
if($List_ID_Result = $getHighestListID_command->fetch_assoc()) {
	$List_ID_received = $List_ID_Result["ID"];
	$List_ID_received_plus_one = $List_ID_received + 1;
}



if( !empty( $image_name ) ) {
$upload_article_preview_statement = $conn->prepare("INSERT INTO tbl_articles_main (title_image_name, visible) VALUES (?, '1')");

$upload_article_preview_statement->bind_param(s, $bild_name);




	if ($upload_article_preview_statement->execute()) {
			echo "Preview veröffentlicht";
			echo "<br>";
		} else {
			echo "Failed Preview: ";
			echo $upload_article_preview_statement->error;
			echo "<br>";
		}
}



if( !empty( $hashtags ) ) {
    $upload_hashtags = "INSERT INTO tbl_tags (ID, fk_lang_id, title, description, visible)
			VALUES ('$List_ID_received_plus_one', '1', 'Tags Titel', '$hashtags', '1')"; //Das funktioniert nonig so, will das mit de Sprache voll kei Sinn macht.


	if ($conn->query($upload_hashtags) === TRUE) {
			echo "Hashtags veröffentlicht";
			echo "<br>";
		} else {
			echo "Failed Hashtags: ";
			echo $conn->error;
			echo "<br>";
		}
}


$language_insert_statement = $conn->prepare("INSERT INTO tbl_articles_lang (pk_fk_article_id, pk_fk_lang_id, title, content, visible) VALUES (?, ?, ?, ?, '1')");
$language_insert_statement->bind_param("iiss", $List_ID_received_plus_one, $language_id, $language_title, $language_text);

if( !empty( $de_titel ) && !empty( $de_text ) ) {

//Hier auch zuerst die ID des Beitrags. Vermutlich müsste man alle ID's Holen und die neuste davon +1 machen und dann die bei pk_fk_article_id und ID einfügen.

//Schauen ob Sprache Variabel X leer ist

	$language_id = 1;
	$language_title = $de_titel;
	$language_text = $de_text;

    if ($language_insert_statement->execute()) {
			echo "DE veröffentlicht";
			echo "<br>";
		} else {
			echo "Failed DE: ";
			echo $language_insert_statement->error;
			echo "<br>";
		}


}

if( !empty( $en_titel ) && !empty( $en_text ) ) {
    // EN = 2

    $language_id = 2;
	$language_title = $en_titel;
	$language_text = $en_text;

    if ($language_insert_statement->execute()) {
			echo "EN veröffentlicht";
			echo "<br>";
		} else {
			echo "Failed EN: ";
			echo $language_insert_statement->error;
			echo "<br>";
		}
}

if( !empty( $it_titel ) && !empty( $it_text ) ) {
    

	$language_id = 3;
	$language_title = $it_titel;
	$language_text = $it_text;

		if ($language_insert_statement->execute()) {
			echo "IT veröffentlicht";
			echo "<br>";
		} else {
			echo "Failed IT: ";
			echo $language_insert_statement->error;
			echo "<br>";
		}
}

if( !empty( $fr_titel ) && !empty( $fr_text ) ) {
    
    $language_id = 4;
	$language_title = $fr_titel;
	$language_text = $fr_text;

		if ($language_insert_statement->execute()) {
			echo "FR veröffentlicht";
			echo "<br>";
		} else {
			echo "Failed FR: ";
			echo $language_insert_statement->error;
			echo "<br>";
		}
}

echo $language_insert_statement->error;
echo $conn->error;


//End Tag für Status = JA
} else{
	echo "Error 401 ";
}
?>
