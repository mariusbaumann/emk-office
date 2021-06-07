


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



<div id="app" class="container">
	<div class="icon-line"></div>


	<a href="#"><div class="icon-logo-container"><img class="icon-logo" src="../2716-991-max.png"></div></a>
	<hr>

	
	<h2 v-if="genLang == 'de'" >Danke für Ihre Anmeldung</h2>
	<h2 v-if="genLang == 'fr'" >Merci pour votre inscription</h2>

	<p v-if="genLang == 'de'"> Sie erhalten eine Bestätigung per E-Mail</p>
	<p v-if="genLang == 'fr'"> Vous recevrez une confirmation par e-mail</p>

	<a v-if="genLang == 'de'" href="."><div class="btn btn-primary">Zurück zur Startseite</div></a>
	<a v-if="genLang == 'fr'" href="."><div class="btn btn-primary">Retour à la page d'accueil</div></a>
	
	<a v-if="genLang == 'de'" href="anmeldung-lokal.php"><div class="btn btn-primary">Weitere Person anmelden</div></a>
	<a v-if="genLang == 'fr'" href="anmeldung-lokal.php"><div class="btn btn-primary">Enregistrer une autre personne</div></a>
	<?php

require_once("config.php");
#if((isset($_POST['vorname'])))

require_once("son-contact_mail.php");
#}
$vorname = $conn->real_escape_string($_POST['vorname']);
$nachname = $conn->real_escape_string($_POST['nachname']);
$bezirk = $conn->real_escape_string($_POST['bezirk']);
$funktion = $conn->real_escape_string($_POST['funktion']);
$email = $conn->real_escape_string($_POST['email']);
$mi = $conn->real_escape_string($_POST['mi']);
$do = $conn->real_escape_string($_POST['do']);
$fr = $conn->real_escape_string($_POST['fr']);
$sa = $conn->real_escape_string($_POST['sa']);
$dismi = $conn->real_escape_string($_POST['dismi']);
$disdo = $conn->real_escape_string($_POST['disdo']);
$disfr = $conn->real_escape_string($_POST['disfr']);
$dissa = $conn->real_escape_string($_POST['dissa']);


$sql="INSERT INTO jksonntag (del_vorname, del_nachname, del_email, del_func, del_mi, del_do, del_fr, del_sa, del_bezirk, del_dismi, del_disdo, del_disfr, del_dissa) VALUES ('".$vorname."','".$nachname."', '".$email."', '".$funktion."', '".$mi."', '".$do."', '".$fr."', '".$sa."', '".$bezirk."', '".$dismi."', '".$disdo."', '".$disfr."', '".$dissa."')";
    if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
        if($detectedLang == "de-CH" || $detectedLang == "de" || $detectedLang == "de-DE" ){
                echo "Danke! Ihre Anmeldung wurde Ihnen per e-Mail bestätigt.";
        }elseif ($detectedLang == "fr-CH" || $detectedLang == "fr" || $detectedLang == "fr-DE"){
                echo "Merci. Merci. Merci. Votre inscription a été confirmée par e-mail.";
        }
    }


?>

	
<!--
	<hr>
	<h4>Programm</h4>

	<div class="row">
		<div class="col-6 col-xs-12">
		<a href="programm-sa.php" >
			<div class="kachel">
				
					<p class="T2">Konferenzprogramm Jährliche Konferenz Samstag, 14.11.20</p>
					<i class="front-icon far fa-clock"></i><br/>
					<p>Hier finden Sie das Programm für die Jährliche Konferenz</p>
				
			</div>	
		</div>
		</a>
	</div>

-->

</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script >
var app = new Vue({
  el: '#app',
  data: {
	
	lang: ''
	
  },
  computed: {
    
	genLang: function (data) {
		if (this.lang == "ch-FR" || this.lang == "fr-FR" || this.lang == "fr" ){
			return "fr";
		} else {
			return "de";
		}
		 
	}
  },
  watch: {
	
  },
  methods: {
	  
  }
});

app.lang = navigator.language || navigator.userLanguage; 


</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>
</html>