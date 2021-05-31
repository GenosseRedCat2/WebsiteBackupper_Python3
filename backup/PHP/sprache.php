<?php 
//header("Location: https://tangoclub.ch/SCHOOL_JASON/PS/GridCSS/DE/startseite.php");
$sprache = $_POST['sprache'];
session_start();
$_SESSION['lang'] = $sprache;
?>

<script>
	window.location.replace(document.referrer);

</script>