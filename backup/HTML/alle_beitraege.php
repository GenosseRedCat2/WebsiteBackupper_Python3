<!doctype html>
<head>
<?php 

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

   <!------Artikel Suche------->
   <h2 align="center">Artikel Suche</h2>
<form class="example" action="alle_beitraege.php" method="GET" style="margin:auto;max-width:500px">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<!------Ende Artikel Suche------->




<?php 


$search_query = '%' . $_GET["search"] . '%';


$sprache = $_SESSION['lang'];

if ($_SESSION['lang'] == "ch") {
   $_SESSION['lang'] = "de";
}



include "../PHP/db_zugang.php";

 $stmt = $conn->prepare('SELECT tam.title_image_name, tal.title, tal.content FROM tbl_articles_main tam JOIN tbl_articles_lang tal on(tam.ID = tal.pk_fk_article_id) WHERE tam.visible = 1 AND exists ( SELECT 1 FROM tbl_lang tl WHERE tl.abbreviation = ? AND (tal.title LIKE ? OR tal.content LIKE ?) AND tal.pk_fk_lang_id = tl.ID) ORDER BY tam.publish_date DESC');

 $stmt->bind_param('sss', $sprache, $search_query, $search_query); // 's' specifies the variable type => 'string'

 $stmt->execute();

 $result = $stmt->get_result();

?>


<!------Artikelbeiträge------->
<?php

//$sql_hashtag = 'SELECT description FROM tbl_tags WHERE fk_lang_id = "1"'; //SPRACH

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

$details = '<details><summary><u><?php echo $persoenlichkeiten_mehranzeigen; ?></u>
            </summary>
               <!---Jump to Page---->
         </details>';

$beitrag_ende = '</div>';


// Führt SQL Befehl aus


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
   echo $media_square_hashtags_end;
   echo $alle_artikel_platform;
   echo $ptag_and_image_start;
   //IMAGE
   echo "../IMG/" . $row["title_image_name"];
   echo $image_end;
   //TEXT
   echo $row["content"];
   echo $ptag_end;
   echo $details;
   echo $beitrag_ende;
   echo "<hr>";
   }

   
   echo "<br>";
   echo "</div>";
}



?>

<!----Ende von einem Beitrag----->


<br>
		<?php

   include 'footer.html';

   ?>


</body>
</html>