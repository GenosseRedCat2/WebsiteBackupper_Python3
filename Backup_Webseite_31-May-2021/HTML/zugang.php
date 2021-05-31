<!doctype html>
<head>
<?php 
//$_SESSION['lang'] = "de";
session_start();

$_SESSION['DIRECTION'] = "zugang.php";




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
   <h2 align="center">Zugang</h2>
<!------Ende Artikel Suche------->





<div class="alle_artikel_platform_layer">
<div class="alle_form_loginform">
<form action="../PHP/login_prozess.php" method="post" class="loginform">

<?php
//Überprüft ob das Passwort stimmt
  if($_SESSION["Anmeldungsstatus"] == "LOGIN_FALSCH"){
    echo '<h3 style="color: red;">Ihre ID oder Ihr Passwort ist inkorrekt.</h3>';
    //session_destroy();
  }
?>

  <div class="login_container">
    <label for="uname"><h3>ID Nummer:</h3></label>
    <input type="text" placeholder="CH-000001" name="ID_nummer" required>

    <label for="psw"><h3>Passwort:</h3></label>
    <input type="password" placeholder="Dein Passwort" name="passwort" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="login_container">
    <span class="psw">Passwort <a style="color: gray;" href="#"> vergessen?</a></span>
  </div>
</form><br>
</div>
</div>
      <br><br>












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