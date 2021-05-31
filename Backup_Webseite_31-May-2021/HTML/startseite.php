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





   <div class="logosection">
      <!--<h2>Proletariat <br> Schweiz</h2>
      <i>
         <h3>Wo andere aufhören, beginnen wir!</h3>
      </i>
       Logo if I want  
      ---->
   </div>

   <!----Slideshow---->
   <div class="slideshowgrid">
      <div class="slideshow-container">
         <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="../IMG/18_05_21_titelbild.png" style="width:100%">
            <div class="text"><?php echo $bluebar_slogan; ?></div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="../IMG/PSLeonNicole_Website.png" style="width:100%">
            <div class="text"></div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="../IMG/PSHeinrichPestalozzi_Website.png" style="width:100%">
            <div class="text"></div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="../IMG/PSHuldrych Zwingli_Website.png" style="width:100%">
            <div class="text"></div>
         </div>
         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
   </div>
      


   <!-- Blauer Balken-->
   <div class="bluebar"></div>

   <!-- Blauer Balken-->



      <!----Formular----->

   <div class="container">
   	<h2 align="center" id="teilnehmen"><?php echo $h2_teilnehmen; ?></h2>
      <form action="../PHP/formular_anfragen.php" method="post">
         <div class="reihe">
            <div class="col-25">
               <label for="vname">
                  <p><?php echo $formular_vorname; ?></p>
                  <br>
               </label>
            </div>
            <div class="col-75">
               <input type="text" id="vname" name="vname" value="" placeholder="Marvin" required><br><br>
            </div>
         </div>
         <div class="reihe">
            <div class="col-25">
               <label for="nname">
                  <p><?php echo $formular_nachname; ?></p>
               </label>
               <br>
            </div>
            <div class="col-75">
               <input type="text" id="nname" name="nname" value="" placeholder="Schweizer" required><br><br>
            </div>
         </div>
         <div class="reihe">
            <div class="col-25">
               <label for="email">
                  <p><?php echo $formular_email; ?></p>
               </label>
               <br>
            </div>
            <div class="col-75">
               <input type="text" id="email" name="email" value="" placeholder="Marvinschweizer@gmail.com" required><br><br>
            </div>
         </div>
         <div class="reihe">
            <div class="col-25">
               <label for="alter">
                  <p><?php echo $formular_alter; ?></p>
               </label>
               <br>
            </div>
            <div class="col-75">
               <input type="number" id="alter" name="alter" value="" placeholder="18" required>
            </div>
         </div>
         <div class="reihe">
            <div class="col-25">
               <label for="auswahl">
                  <p><?php echo $formular_ichmoechte; ?></p>
               </label>
            </div>
            <div class="col-75">
               <select id="auswahl" name="auswahl" required>
                  <option>
                     <p><?php echo $formular_mitmachen; ?></p>
                  </option>
                  <option>
                     <p><?php echo $formular_sympathisantwerden; ?></p>
                  </option>
                  <option>
                     <p><?php echo $formular_infoserhalten; ?></p>
                  </option>
               </select>
            </div>
         </div>
         <div class="reihe">
            <div class="col-25"></div>
            <input type="submit" value=<?php echo $formular_senden; ?>>
         </div>
   </div>

   </form>
<!----Social media------>
   <div class="icon-bar">
  <a href="https://instagram.com/proletariat.ch" class="instagram"><i class="fa fa-instagram"></i></a>
    <a href="https://twitter.com/proletariat_ch" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://facebook.com/proletariat.schweizer" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.youtube.com/channel/UCiIssAwHJ33D9xT07Fmsg3w" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
<!--------End of Social Media------------>


   


   <script type="text/javascript" src="../JS/script.js"></script>
   <br>
   <h2 align="center" id="aktuelles"><?php echo $h2_aktuelles; ?></h2>




<!--Connect to DB-->
<?php 

include "../PHP/db_zugang.php";

$sprache = $_SESSION['lang'];

if ($sprache == "ch") {
   $sprache = "DE";
}

   //Beiträge


//Das ist sicher, lieber Seppli!

   $sql = 'SELECT tam.title_image_name, tal.title, tam.ID FROM tbl_articles_main tam JOIN tbl_articles_lang tal on(tam.ID = tal.pk_fk_article_id) WHERE tam.visible = 1 AND exists ( SELECT 1 FROM tbl_lang tl WHERE tl.abbreviation = "'. $sprache .'" AND tal.pk_fk_lang_id = tl.ID) ORDER BY tam.publish_date DESC LIMIT 8';







   $media_squares = '<div class="media_squares">';
   $media_square_topframe = '<div class="media_square_square">
         <div class="media_square_square_sillydiv">
         <div class="media_square_square_image">';
   $media_square_image_start = '<img class="media_square_square_image" src="';
   $media_square_image_end = '">';
   $media_square_topframe_end = '</div></div>';
   $media_square_titletext_start = '<div class="media_square_square_titletext">';

   $media_square_URL_start = '<a href="';
   $media_square_URL_middle = '"> ';
   $media_square_URL_end = '</a>';


   $media_square_titletext_h1 = '<h1>';
   $media_square_titletext_h1_end = '</h1>';
   $media_square_titletext_end = '<br></div></div>';
   $media_squares_end = '</div>';



   $result = $conn->query($sql); // Führt SQL Befehl aus
   if ($result->num_rows > 0) {
      // output data of each row
      echo $media_squares;
      while($row = $result->fetch_assoc()) {
         
         


         echo $media_square_topframe;
         echo $media_square_image_start;
         echo "../IMG/" . $row["title_image_name"];
         echo $media_square_image_end;
         echo $media_square_topframe_end;
         echo $media_square_titletext_start;

         echo $media_square_URL_start;
         echo "beitrag.php?id=" . $row["ID"];
         echo $media_square_URL_middle;
         echo $media_square_titletext_h1;
         echo $row["title"];
         echo $media_square_titletext_h1_end;
         echo $media_square_URL_end;
         echo $media_square_titletext_end;
         
      }
      echo $media_squares_end;
}
      
   ?>

   <!-----End of Beiträge----->
   <br>
   <br>













   <!----Parteiprogramm und statuten----->
   <h2 align="center" id="programm"><?php echo $h2_parteiprogramm; ?></h2>
   <iframe src="https://docs.google.com/viewer?url=https://tangoclub.ch/SCHOOL_JASON/PS/GridCSS/HTML/PS_programm_DE.pdf&embedded=true" style="width: 100%; height: 1000px;" frameborder="0" >
   </iframe>
   <br>
   <br>
   <h2 align="center" id="statuten"><?php echo $h2_statuten; ?></h2>
   <iframe src="https://docs.google.com/viewer?url=https://tangoclub.ch/SCHOOL_JASON/PS/GridCSS/HTML/PS_statuten_DE.pdf&embedded=true" style="width: 100%; height: 1000px;" frameborder="0" >
   </iframe>
   <br>
   <br>



   <!----Grossartige Schweizer zusammenklappbar----->
   
	<h2 align="center"><?php echo $h2_grossartigeschweizer; ?></h2>
   <div class="persoenlichkeiten_raster_gruppe">
   	<div id="persoenlichkeiten"></div>
   	<h3>Leon Nicole</h3>
   	
   	<div id="schweizer_border">
      <div class="persoenlichkeiten_raster">
         <p><img src="../IMG/LeonNicole.jpeg"> 

         	<?php echo $persoenlichkeiten_zusammenfassung_leonnicole; ?>
         
         <details>

            <summary><u><?php echo $persoenlichkeiten_mehranzeigen; ?></u>
            </summary>
            
               <?php echo $persoenlichkeiten_ganztext_leonnicole; ?>
            
         </details>
      </div>
  </div>
  		<br><br>
  		<h3><?php echo $persoenlichkeiten_name_heinrichpestalozzi; ?></h3>
      <div id="schweizer_border">
      <div class="persoenlichkeiten_raster">
         <p><img src="../IMG/pestalozzi.jpg">
         	<?php echo $persoenlichkeiten_zusammenfassung_heinrichpestalozzi; ?>
         
         <details>

            <summary><u><?php echo $persoenlichkeiten_mehranzeigen; ?></u>
            </summary>
               <?php echo $persoenlichkeiten_ganztext_heinrichpestalozzi; ?>
         </details>
      </div>
	</div>

<br><br>
         <h3><?php echo $persoenlichkeiten_name_huldrichzwingli; ?></h3>
      <div id="schweizer_border">
      <div class="persoenlichkeiten_raster">
         <p><img src="../IMG/zwingli.jpg">
         	<?php echo $persoenlichkeiten_zusammenfassung_huldrichzwingli; ?>
         <details>
            <summary><u><?php echo $persoenlichkeiten_mehranzeigen; ?></u>
            </summary>
            <?php echo $persoenlichkeiten_ganztext_huldrichzwingli; ?>
         </details>
      </div>
   </div>
   
   </div>
	<h2 align="center" id="ueberuns"><?php echo $ueberuns_ueberuns; ?></h2>
		
		<div class="ueberuns_raster_gruppe">
			<div class="ueberuns_raster">
				<img src="../IMG/Personen/BJ.png">
				<?php echo $ueberuns_jason; ?>
			</div>

			<div class="ueberuns_raster">
				<img src="../IMG/Personen/SG.png">
				<?php echo $ueberuns_grisha; ?>
			</div>

         <div class="ueberuns_raster">
				<img src="../IMG/Personen/GD.png">
				<?php echo $ueberuns_daniel; ?>
			</div>
		</div>



		<div class="ueberuns_raster_gruppe_ehrenmitglieder">
			<div class="ueberuns_raster_ehrenmitglieder">
				<img src="../IMG/Personen/GA.png">
				<?php echo $ueberuns_angelo; ?>
			</div>
		</div>


            <!----Kurzinfos----->


   
      <div class="kurzinfo_raster_gruppe">
         <div class="kurzinfo_raster_red">
            <img src="../IMG/stencil/kurzinfo_red.png">
            <?php echo $kreis_slogan_1; ?>
         </div>

         <div class="kurzinfo_raster_blue">
            <img src="../IMG/stencil/kurzinfo_blue.png">
            <?php echo $kreis_slogan_2; ?>
         </div>

         <div class="kurzinfo_raster_green">
            <img src="../IMG/stencil/kurzinfo_green.png">
            <?php echo $kreis_slogan_3; ?>
            
         </div>
      </div>

   <!----Bücher----->



		<h2 align="center" id="buecher"><?php echo $h2_buecher; ?></h2>
		<div class="buecher_raster">
         <!------------
			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>Städtebauende und Vandalen in unserem Zeitalter</h3>
				<b><p>Caleb Maupin & Jason Banyer</p></b>
				<details>
				<summary><u><?php echo $buecher_ueberdasbuch; ?></u></summary>
				<p>In diesem Buch schreibt Caleb Maupin darüber, <br> wie es durch die ganze Geschichte der Menschheit eine städtebauende und eine vandalistische Tendenz gegeben hat und auch heute noch gibt.</p>
			</details>
				<br>
			</div>


			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>Selbstbestimmung der Nationen und Ressourcen</h3>
				<b><p>Jason Banyer</p></b>
				<details>
				<summary><u><?php echo $buecher_ueberdasbuch; ?></u></summary>
				<p>In diesem Buch schreibt Jason Banyer darüber, <br> wie jedes Land das Recht hat sich selbst zu bestimmen.</p>
			</details>
			<br>
			</div>
			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>Automatisierte Schweiz</h3>
				<b><p>Jason Banyer</p></b>
				<details>
				<summary><u><?php echo $buecher_ueberdasbuch; ?></u></summary>
				<p>In diesem Buch schreibt Jason Banyer darüber, <br>  wie eine Schweiz aussehen würde, wenn die Automatisierung der Bevölkerung dienen würde.</p>
				</details>
				<br>
			</div>
			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>Capitalism & Oil Crisis</h3>
				<b><p>Caleb Maupin</p></b>
				<details>
				<summary><u><?php echo $buecher_ueberdasbuch; ?></u></summary>
				<p>In diesem Buch schreibt Caleb Maupin darüber, <br>  wie der Kapitalismus mit den Ölkrisen umgeht.</p>
				<br>
			</div>

			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>America's Way Out</h3>
				<b><p>Caleb Maupin</p></b>
				<details>
				<summary><u><?php echo $buecher_ueberdasbuch; ?></u></summary>
				<p>In diesem Buch schreibt Caleb Maupin darüber, <br>  wie Amerika eine 180° Wende machen kann.</p>
				</details>
				<br>
			</div>
--------->
			<div class="buch">
				<img src="../IMG/your-country-is-just-not-that-into-you-2.jpg">
				<a style="color:black" href="https://www.amazon.de/Your-Country-Just-That-Into/dp/0762453516"><h3>Your Country Is Just Not That Into You</h3></a>
				<b><p>Jimmy Dore</p></b>
				<details>
				<summary><u><?php echo $buecher_ueberdasbuch; ?></u></summary>
				<p>In diesem Buch schreibt Jimmy Dore auf humorvolle Weise darüber, <br>  wie Amerika das eigene Volk ignoriert und welche Probleme daraus entstanden sind.</p>
				</details>
				<br>
			</div>
<!------------
			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>loremIpsum</h3>
			</div>

			<div class="buch">
				<img src="../IMG/CBAV_EN.jpg">
				<h3>loremIpsum</h3>
			</div>
         ------->
		</div>


<!------Abstimmungsparolen------->

<div class="parolen_platform_layer">
<h2 align="center" id="parolen"><?php echo $h2_abstimmungsparolen; ?></h2>
<div class="parolen_platform">
<div class="parolen_platform_content">
<?php echo $abstimmungsparolen_EID; ?>
</details>
</div>
<div class="line"></div>
<br>
<br>


<div class="parolen_platform_content">
<?php echo $abstimmungsparolen_verhuellungsverbot; ?>
</details>


</div>
<div class="line"></div>
<br>
<br>

<div class="parolen_platform_content">
<?php echo $abstimmungsparolen_freihandelsabkommenindonesien; ?>
</details>
</div>
</div>

</div>

<br>

		
<div class="footer_layer">
<div class="footer_group">

     <!----Footer----->


   <div class="footer_group_entry">
      <div id="footer_right">
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
    ?>
      <h2 align="left" id="kontakt" style="color:white"> <?php echo $h2_kontakt; ?> </h2>
      <p>Email: <u><a href="mailto:proletariatschweiz@gmail.com">proletariatschweiz@gmail.com</a></u> </p>
         <p>Facebook: <u><a href="https://www.facebook.com/proletariat.schweizer">proletariat.schweizer</a></u></p>
         <p>Instagram: <u><a href="https://instagram.com/proletariat.ch">proletariat.ch</a></u></p>
         <p>Twitter: <u><a href="https://twitter.com/proletariat_ch">proletariat_ch</a></u></p>
         <p>YouTube: <u><a href="https://www.youtube.com/channel/UCiIssAwHJ33D9xT07Fmsg3w/">proletariat schweiz</a></u></p>

   </div>
   <br> 
   <br>
   <br> 
   <br>
   <div class="madeby"><u><a  href="https://jasonbanyer.ch">Made by J.Banyer 2021</a></u></div>
   </div>


</div>
</div>


</body>
</html>