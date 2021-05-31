<?php

$empfaenger  = $_POST["email"]  ; // beachte das Komma
#$lang  = $_POST["detectedLang"]  ; // beachte das Komma
$lang = 'de';
// Betreff
//$betreff = 'EMK-Schweiz: Bestätigung zur Anmeldung';


if ($_POST['mi'] == 1) {
    $mmi = "<p>Mittwochabend</p>";
}
if ($_POST['do'] == 1) {
    $mdo = "<p>Donnerstag</p>";
}
if ($_POST['fr'] == 1) {
    $mfr = "<p>Feitag</p>";
}
if ($_POST['sa'] == 1) {
    $msa = "<p>Samstag</p>";
}


if ($_POST['dismi'] == 1) {
    $mdismi = "<p>Mittwochabend</p>";
}
if ($_POST['disdo'] == 1) {
    $mdisdo = "<p>Donnerstag</p>";
}
if ($_POST['disfr'] == 1) {
    $mdisfr = "<p>Freitag</p>";
}
if ($_POST['dissa'] == 1) {
    $mdissa = "<p>Samstag</p>";
}



// Nachricht
if($lang == 'fr' || $lang == 'fr-CH' || $lang == 'fr-FR' ){
    
    $betreff = 'EEM-Suisse: Confirmation d\'inscription';
    $nachricht = '
<html>
<head>
    <title>confirmation de réservation</title>
</head>
<body>
    <p>Chère Madame/Monsieur ' . $_POST["nachname"] . '</p>

    <p>Merci de votre intérêt pour l\'événement "Bible, Eglise - Homosexualité".
    Nous avons reçu votre inscription et nous continuerons à la traiter.</p>
    
    <p><b>Veuillez noter que : 
    Ce n\'est pas encore la confirmation finale de l\'inscription. Vous le recevrez avec un e-mail séparé (les personnes qui n\'appartiennent pas à l\'EMK, après le 16 octobre).</b></p>
    
    <p>Sincèrement vôtre</p>
    <p>Le comité organisateur</p>
</body>
</html>
';

} else {
    $betreff = 'EMK-Schweiz: Bestätigung zur Anmeldung JK 2021';
$nachricht = '
<html>
<head>
    <title>Anmeldungsbestätigung</title>
</head>
<body>
    <p>Sehr geehrte/r Frau/Herr ' . $_POST["nachname"] . '</p>

    <p>Vielen Dank für Ihre Anmeldung zur Jährlichen Konferenz.</p>
    <p>An welchen Tagen Sie nun devintiv vor Ort teilnehmen können, wir nach Anmeldeschluss bekannt gegeben.</p>

    <p>Sie haben uns folgendes Tage angegeben:</p>
    '.
    $mmi . $mdo . $mfr . $msa
    
    .'
    <p>Sie könnten auf folgende Tage verzichten:</p>

    '. 
    $mdismi . $mdisdo . $mdisfr . $mdissa
    
    .'
    
    <p>
    
    <p>Mit freundlichen Grüssen</p>
    <p>Das Organisations-Komitee</p>
</body>
</html>
';
}

// für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
$header[] = 'MIME-Version: 1.0';
$header[] = 'Content-type: text/html; charset=utf-8';

// zusätzliche Header
$header[] = 'To: ' . $_POST["vorname"] . '' . $_POST["nachname"] . '<' . $_POST["email"] . '>';
$header[] = 'From: EMK-Schweiz <noreply@emk-schweiz.ch>';

// verschicke die E-Mail
// mail($empfaenger, $betreff, $nachricht, implode("\r\n", $header));



//$toEmail = $_POST["your_email"] ;
//$mailHeaders = "From: noreply@emk-schweiz.ch <noreply@emk-schweiz.ch>\r\n MIME-Version: 1.0\r\n Content-type: text/html; charset=iso-8859-1";
if(mail($empfaenger, $betreff, $nachricht, implode("\r\n", $header))) {
echo "";
} else {
echo"E-Mail konnte nicht gesendet werden.";
}
?>