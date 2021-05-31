<!doctype html>
<head>
<?php 
$_SESSION['lang'] = "de";
session_start();



if ($_SESSION['lang'] == "ch") {
include "sprachen/schweizerdeutsch.php";
} 
if ($_SESSION['lang'] == "de") {
include "sprachen/deutsch.php";
}
if ($_SESSION['lang'] == "en") {
include "sprachen/englisch.php";
}
if ($_SESSION['lang'] == "fr") {
include "sprachen/franzoesisch.php";
}
if ($_SESSION['lang'] == "it") {
include "sprachen/italienisch.php";
}
if ($_SESSION['lang'] == "rae") {
include "sprachen/raetoromanisch.php";
}
else {
include "sprachen/deutsch.php";
}

    ?>
    <!----Verschiedene Favicon---->
   <title><?php echo "$titel_header"; ?></title>
   <link rel="stylesheet" href="../CSS/grid.css">
   <link rel="stylesheet" href="../CSS/gridphone.css">
   <!-- Für Apple-Geräte -->
   <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon-180x180.png">
   <!-- Für Browser -->
   <link rel="shortcut icon" type="image/x-icon" href="../favicon/mstile-310x310.png">
   <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
   <!-- Für Windows Metro -->
   <meta name="msapplication-square310x310logo" content="../favicon/mstile-310x310.png">
   <meta name="msapplication-TileColor" content="[HEXFARBE (z.B. #000000)]">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>

<body>

   <!----Verschiedene Sprachen----->
   <?php 
if ($_SESSION['lang'] == "ch") {
include "sprachen/schweizerdeutsch.php";
} 
if ($_SESSION['lang'] == "de") {
include "sprachen/deutsch.php";
}
if ($_SESSION['lang'] == "en") {
include "sprachen/englisch.php";
}
if ($_SESSION['lang'] == "fr") {
include "sprachen/franzoesisch.php";
}
if ($_SESSION['lang'] == "it") {
include "sprachen/italienisch.php";
}
if ($_SESSION['lang'] == "rae") {
include "sprachen/raetoromanisch.php";
}


//Navbar wird included
include "navbar.php";
    ?>



<!-----Alles Importiere und refactore------>





<!--Connect to DB-->
<?php 


//Hier wird die ID per GET geholt und angezeigt, weil vorher 
// die ID bereits im preview verlinkt wurde im Titel (wie bei der suche)




//<!----Beiträge----->

$article_ID = $_GET["id"];


include "../PHP/db_zugang.php";




include "../PHP/db_zugang.php";

$sprache = $_SESSION['lang'];

if ($sprache == "ch") {
   $sprache = "DE";
}

   //Beiträge

$stmt = $conn->prepare('SELECT tam.title_image_name, tal.title, tal.content FROM tbl_articles_main tam JOIN tbl_articles_lang tal on(tam.ID = tal.pk_fk_article_id) WHERE tam.visible = 1 AND exists ( SELECT 1 FROM tbl_lang tl WHERE tl.abbreviation = "'. $sprache .'" AND tam.ID = ? AND tal.pk_fk_lang_id = tl.ID) ORDER BY tam.publish_date DESC');

 $stmt->bind_param('i', $article_ID); // 'i' specifies the variable type => 'int'

 $stmt->execute();

 $result = $stmt->get_result();




   $media_squares = '<div class="media_squares">';
   

   $media_square_topframe = '<div class="media_square_square">
         <div class="media_square_square_sillydiv">
         <div class="media_square_square_image">';

   $media_square_image_start = '<img class="media_square_square_image" src="';
   $media_square_image_end = '">';

   $media_square_topframe_end = '</div></div>';

   $media_square_titletext_start = '<div class="media_square_square_titletext">';

   $media_square_titletext_h1 = '<h1>';
   $media_square_titletext_h1_end = '</h1>';

   $media_square_titletext_end = '<br></div></div>';

   $media_squares_end = '</div>';





   //AlleBeiträge Anzeige Tags
	$sql_hashtag = 'SELECT description FROM tbl_tags WHERE fk_lang_id = "1"'; //SPRACH
	$media_squares = '<br><div class="alle_artikel_platform">';
	$media_square_titletext_h3 = '<h3>';
	$media_square_titletext_h3_end = '</h3>';

	$media_square_hashtags_start = '<p>';
	$media_square_hashtags_end = '</p>';

	$alle_artikel_platform = '<div class="alle_artikel_platform_content">
	<div class="alle_artikel_raster">';

	$ptag_and_image_start = '<p style="line-break: anywhere"><img height="400px" src="';
	$image_end = '">';

	$ptag_end = '</p></div>';

	$beitrag_ende = '</div>';







if ($result->num_rows > 0) {
      // output data of each row
      echo $media_squares;

      while($row = $result->fetch_assoc()) {
      echo $media_square_titletext_h3;
      echo $row["title"];
      echo $media_square_titletext_h3_end;

      echo $media_square_hashtags_start;
      //echo $row["hashtags"];

      /*$result_hashtags = $conn->query($sql_hashtag); // Führt SQL Befehl aus
   if ($result_hashtags->num_rows > 0) {
   while($row_hashtag = $result_hashtags->fetch_assoc()) {
      echo $row_hashtag["description"];
   }
}*/
//"/\[[a-z]*\]\[[\w\.\:]*\]\[[\w\.\:,\s]*\]/gs"
   // Replace tags from text with intended content
   $content = preg_replace('"\b(http://\S+)"', '<a href="$1">$1</a>', $row["content"]);

   /*for ($i = 0; $i < count($tag_matches); $i++) {
      echo $tag_matches[$i];
   }*/

   echo $media_square_hashtags_end;
   echo $alle_artikel_platform;
   echo $ptag_and_image_start;
   //IMAGE
   echo "../IMG/" . $row["title_image_name"];
   echo $image_end;
   //TEXT
   echo $content;
   echo $ptag_end;
   echo $beitrag_ende;
   echo "<hr>";
   }

   
   echo "<br>";
   echo "</div>";
}
   ?>

   <!-----End of Beiträge----->
   <br>
   <br>
   <?php

   include 'footer.html';

   ?>
</body>
</html>