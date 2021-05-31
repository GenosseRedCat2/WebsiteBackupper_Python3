<?php
if(empty($_POST['vname']) || empty($_POST['nname']) 
|| empty($_POST['email']) || empty($_POST['alter']) 
|| empty($_POST['auswahl']) 
||  $_POST['alter'] == "0" ){

    echo "<h1>Etwas stimmt mit Ihrer Eingabe nicht! | ERROR 400</h1>";
    echo "<br><br>";
    echo "<h2>Überprüfen Sie, ob Sie alle Daten eingetragen haben.</h2>";
    echo "<br><br>";
    echo '<a href="startseite.php"><h4>Nimm mich zurück zum Formular!<h4></a>';



} else{
    $vorname = $_POST['vname'];
    $nachname = $_POST['nname'];
    $email = $_POST['email'];
    $alter = $_POST['alter'];
    $auswahl = $_POST['auswahl'];
    

    


//Gefährlicher Code wird entfernt (Funktioniert noch nicht ganz)
    function RemoveSpecialChar($str) { 

        $str = str_replace( array( '\'', '"', '/', 
        ',' , ';', '<', '>', '-', '!', '$'. '/', '(', ')', '@','1','2','3','4','5','6','7','8','9','0' ), ' ', $str); 
          
        return $str; 
        
    } 

    function RemoveSpecialCharEL($str2) { 

        $str2 = str_replace( array( '\'', '"',
        ',' , ';', '<', '>', '-', '!', '$'. '/', '(', ')' ), ' ', $str2); 
          
        return $str2; 
        
    } 

    $vornameNackt = RemoveSpecialChar($vorname);
    $nachnameNackt = RemoveSpecialChar($nachname); 
    $emailNackt = RemoveSpecialCharEL($email); 
    $auswahlNackt = RemoveSpecialChar($auswahl);


    //Zahlen entfernen
    $alterNackt = preg_replace("/[^0-9]/", "", $alter);
// 
//     function RemoveSpecialCharNN($nachname) { 
// 
//     $nachnameNackt = str_replace( array( '\'', '"', 
//             ',' , ';', '<', '>', '-', '!', '$' ), ' ', $nachname); 
//         return $nachnameNackt; 
//     } 
// 
//         function RemoveSpecialCharEM($nachname) { 
// 
//             $emailNackt = str_replace( array( '\'', '"', 
//             ',' , ';', '<', '>', '', '!', '$' ), ' ', $email); 
//             return $emailNackt; 
//         } 

        

    
    echo '<h1> Vielen Dank, ' . $vornameNackt . ' ' . $nachnameNackt . ' für deine Anmeldung! </h1><br><br>';
    echo 'Deine Email ist <b>' . $emailNackt . '</b><br>';
    echo 'Dein Alter ist <b>' . $alterNackt . '</b>.<br>';
    echo 'Du möchtest <b>' . $auswahlNackt . '</b>.<br>';
    echo '<a href="startseite.php"><h4>Zurück zur Webseite<h4></a>';

/* Funktioniert nicht, muss aviel von rafisa mal fragen */
    $empfaenger = 'theowlintheforest@gmail.com';
    $betreff = 'Der Betreff';
    $nachricht = 'Hallo';
    $header = 'From: jasonbanyer@gmail.com' . "\r\n" .
        'Reply-To: theowlintheforest@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

mail($empfaenger, $betreff, $nachricht, $header);


}
?>