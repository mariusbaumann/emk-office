<?php
$lang = $_POST["lang"];
$empfaenger  = $_POST["email"]  ; // beachte das Komma
#$lang  = $_POST["detectedLang"]  ; // beachte das Komma
#$lang = 'de';
// Betreff
//$betreff = 'EMK-Schweiz: Bestätigung zur Anmeldung';

if ($lang == "fr") {
    if ($_POST['mi'] == 1) {
        $mmi = "<p>Mercredi soir </p>";
    }
    if ($_POST['do'] == 1) {
        $mdo = "<p>Jeudi</p>";
    }
    if ($_POST['fr'] == 1) {
        $mfr = "<p>Vendredi</p>";
    }
    if ($_POST['sa'] == 1) {
        $msa = "<p>Samedi</p>";
    }


    if ($_POST['dismi'] == 1) {
        $mdismi = "<p>Mercredi soir</p>";
    }
    if ($_POST['disdo'] == 1) {
        $mdisdo = "<p>Jeudi</p>";
    }
    if ($_POST['disfr'] == 1) {
        $mdisfr = "<p>Vendredi</p>";
    }
    if ($_POST['dissa'] == 1) {
        $mdissa = "<p>Samedi</p>";
    }

}
else {
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

}
    


// Nachricht
if($lang == 'fr'){
    
    $betreff = 'EEM-Suisse: Confirmation d\'inscription';
    $nachricht = '
<html>
<head>
    <title>confirmation de réservation</title>
</head>
<body>
    <p>Chère Madame/Monsieur ' . $_POST["nachname"] . '</p>

    <p>Merci de vous inscrire à la conférence annuelle.
    </p> <p>Les jours auxquels vous pouvez désormais assister de manière dévinitive sur place seront annoncés après la date limite des inscriptions.</p>

    </p> Vous nous avez donné les jours suivants :</p> 
    '.
    $mmi . $mdo . $mfr . $msa
    
    .'

    <p>Vous pourriez vous passer des jours suivants :</p>

    '. 
    $mdismi . $mdisdo . $mdisfr . $mdissa
    
    .'
    
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
    if ($lang == "fr") {
        echo "L'email n'a pas pu être envoyé." ;
    }
    else {
        echo"E-Mail konnte nicht gesendet werden.";
    }
}
?>