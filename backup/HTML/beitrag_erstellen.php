<!doctype html>
<head>
<?php 
//$_SESSION['lang'] = "de";
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
  


<?php
if($_SESSION["Anmeldungsstatus"] == "JA"){
echo '

   <!------Beitrag erstellen------->
   <h2 align="center">Beitrag erstellen</h2>
<div class="alle_form_loginform">
<form action="../PHP/beitrag_hochladen.php" method="post" class="loginform" enctype="multipart/form-data">

  
<button type="submit" style="margin-left: 90%;">Posten</button>
  <div class="login_container">

  <label for="fileup"><h3>Bild hochladen</h3></label>
  <input type="file" name="bild_name" id="bild_name">

<br>
<!--------
   <label for="auswahlbilder"><h3>Bild auswählen</h3></label>
   <select name="auswahlbilder" id="vorgegebenebilder">
    <option value="nichts">nichts</option>
    <option value="volvo">Volvo</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
------>

</div>




<!------Artikelbeiträge------->
<br>
<div class="alle_artikel_platform_layer">
<div class="alle_artikel_platform">

<h2>Deutsch</h2>
    <label for="de_titel"><h3>Titelname:</h3></label>
    <input type="text" placeholder="Titelname" name="de_titel">
    
    <label for="de_text"><h3>Text:</h3></label>
    <textarea name="de_text" rows="20" cols="50" placeholder="Beitragstext">
    </textarea>

  </div>
<br>

<details>
<summary>EN</summary>
<div class="alle_artikel_platform_layer">
<div class="alle_artikel_platform">

<h2>English</h2>
    <label for="en_titel"><h3>Titelname:</h3></label>
    <input type="text" placeholder="Titelname" name="en_titel">
    
    <label for="en_text"><h3>Text:</h3></label>
    <textarea name="en_text" rows="20" cols="50" placeholder="Beitragstext">
    </textarea>

  </div>
</details>
<br>

<details>
<summary>FR</summary>
<div class="alle_artikel_platform_layer">
<div class="alle_artikel_platform">
  <h2>Französisch</h2>
    <label for="fr_titel"><h3>Titelname:</h3></label>
    <input type="text" placeholder="Titelname" name="fr_titel">
    
    <label for="fr_text"><h3>Text:</h3></label>
    <textarea name="fr_text" rows="20" cols="50" placeholder="Beitragstext">
    </textarea>

  </div>
</details>
<br>
<details>
            <summary>IT</summary>

<div class="alle_artikel_platform_layer">
<div class="alle_artikel_platform">
    <h2>Italienisch</h2>
    <label for="it_titel"><h3>Titelname:</h3></label>
    <input type="text" placeholder="Titelname" name="it_titel">
    
    <label for="it_text"><h3>Text:</h3></label>
    <textarea name="it_text" rows="20" cols="50" placeholder="Beitragstext">
    </textarea>

  </div>
</details>


</form><br>
</div>
</div>
</div>
</div>
</div>
<br>
 
';
} else{
  echo "<br> Error 401 <br>";
}
 ?>
		
<div class="footer_layer">
<div class="footer_group">
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