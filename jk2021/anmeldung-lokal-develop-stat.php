<html>
<head>

<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/39876f8fd5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://www.emk-office.ch/resources/CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://www.emk-office.ch/resources/theme.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EMK-Office</title>

<meta name="description" content="Website der EMK Zentralverwaltung" />
</head>

<body>



<?php
# Hier kann man das Passwort ändern
$passwort = "Wesley2020*";

if (isset($_POST["go"])) {
 if ($_POST["name"] == $passwort) {

include "anmeldung-lokal-develop-stat-show.php"

?>
<!-- hier könnt Ihr noch weiteren Text, Links, Bilder oder sonst etwas einbauen -->



<?php
 }
 else {
  # Meldung bei einem falschen Passwort
 echo '<p><b><font color="red">Das Passwort ist falsch!</font></b><br><br>';
 echo '<a href="index.php">zur erneuten Eingabe</a></p>';
 }
}
else
{
?>

<!-- Hier wird das Passwort gesendet -->
<form action="#" method="post">
  <input type="Password" required placeholder="Passwort eingeben" name="name">
  <input type="Submit" name="go" value="Login">
</form>

<?php
}
?>

</body>
</html>