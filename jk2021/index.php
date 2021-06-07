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



<div class="container" id="app">
	<div class="icon-line"></div>


	<a href="#"><div class="icon-logo-container"><img class="icon-logo" src="../2716-991-max.png"></div></a>
	<!-- <a href="fr"><div class="btn btn-primary">Pour le français, cliquez ici</div></a>-->
	<a v-if="genLang == 'de'" href="support.php"><div class="btn btn-danger float-right"><i class="fas fa-phone"></i> Hilfe-Telefon</div></a>
	<a v-if="genLang == 'fr'" href="support.php"><div class="btn btn-danger float-right"><i class="fas fa-phone"></i> Téléphone d'assistance</div></a>

	<hr>

	<h2 v-if="genLang == 'de'">Jährliche Konferenz 2021 Startseite</h2>
	<h2 v-if="genLang == 'fr'">Accueil de la conférence annuelle 2021</h2>

	<p v-if="genLang == 'de'">Hier finden Sie alle Informationen zur Teilnahme an der Jährlichen Konferenz. Die Seite wird laufend aktuallisiert.</p>
	<p v-if="genLang == 'fr'">Vous trouverez ici toutes les informations dont vous avez besoin pour participer à la conférence annuelle. La page sera mise à jour périodiquement.</p>

	<hr>
	<h4 v-if="genLang == 'de'">Anmeldung für die Teilnahme vor Ort</h4>
	<h4 v-if="genLang == 'fr'">Inscription pour la participation sur place</h4>

	<p v-if="genLang == 'de'">Wenn Sie vor Ort kommen wollen, müssen Sie sich hier noch einmal für die Teilnahme vor Ort anmelden. Aufgrund der Covid-19 Massnahmen sind maximal 100 Personen pro Tag erlaubt. Daher können Sie sich nur an 2 von 3 Konferenztagen für die Teilnahme vor Ort anmelden.  </p> 
	<p v-if="genLang == 'fr'">Si vous souhaitez venir sur place, vous devrez vous réinscrire ici pour y assister. En raison des mesures Covid-19, un maximum de 100 personnes est autorisé par jour. Vous ne pouvez donc vous inscrire pour une participation sur place que pour 2 des 3 jours de conférence.  </p> 

	<div class="row">
		<div class="col-12 col-xs-12">
		<a href="anmeldung-lokal.php" target="_blank">
			<div class="kachel">
				
					<h5 v-if="genLang == 'de'">Für die Teilnahme vor Ort anmelden <span class="badge badge-pill badge-danger float-right">Anmeldeschluss: 1. Juni 2021 23:59</span></h5>
					<h5 v-if="genLang == 'fr'">Pour s'inscrire à la participation sur place <span class="badge badge-pill badge-danger float-right">Date limite d'inscription : 1er juin 2021 23:59</span></h5>

					<i class="front-icon fas fa-file-signature"></i><br/>
					<p v-if="genLang == 'de'">Hier geht es zum Anmeldeformular.</p>
					<p v-if="genLang == 'fr'">Cliquez ici pour le formulaire d'inscription.</p>
					
					
				
			</div>	
		</div>
		</a>
	</div>
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
<hr>
	<h4 v-if="genLang == 'de'">Weitere Informationen</h4>
	<h4 v-if="genLang == 'fr'">Plus d'informations</h4>
	<p v-if="genLang == 'de'">Hier finden Sie weitere Informationen zur Jährlichen Konferenz.</p> 
	<p v-if="genLang == 'fr'">Vous trouverez ici de plus amples informations sur la conférence annuelle.</p> 

	<div class="row">
		<div class="col-6 col-xs-12">
			<a v-if="genLang == 'de'" href="https://cloud.methodisten.ch/f/466921" target="_blank">
				<div class="kachel">
				<h5 >Dokumente JK 2021</h5>

				<i class="front-icon fas fa-file"></i><br/>
				<p >Hier finden Sie die wichtisten Dokumennte in der aktuellsten Fassung.</p>
				</div>
			</a>
			<a v-if="genLang == 'fr'" href="https://cloud.methodisten.ch/f/466906" target="_blank">
				<div class="kachel">
					
					<h5 >Documents JK 2021</h5>

					<i class="front-icon fas fa-file"></i><br/>
					<p >Vous trouverez ici les documents les plus importants dans leur dernière version.</p>
				
				</div>
			</a>
		</div>
		
		<div class="col-6 col-xs-12">
			<a href="https://anmeldung.methodisten.ch/registerform.php" target="_blank">
				<div class="kachel">
					<h5 v-if="genLang == 'de'">Zugang interner Bereich</h5>
					<h5 v-if="genLang == 'fr'">Accès à le domain interne</h5>

					<i class="front-icon fas fa-lock-open"></i>
					
					<p v-if="genLang == 'de'">Zugang zu den Dokumenten beantragen.</p>
					<p v-if="genLang == 'fr'">Demander l'accès à des documents.</p>
				</div>
			</a>	
		</div>
	</div>

	<!--<div class="kacheln">	
		<div class="align">
			<a href="https://nx5186.your-storageshare.de/f/201077" target="_blank">
				<div class="element">
					
				</div>
			</a>
			
			<a href="https://213.193.118.142:8081" target="_blank">
				<div class="element">
					<p class="T2">Tagesprogramm Jährliche Konferenz</p>
					<i class="front-icon far fa-clock"></i><br/>
					<p>Sehen Sie sich den aktuellen Tagesablauf an. Kurzfristige Änderungen werden hier berücksichtigt.</p>
				</div>
			</a>
		
		</div>
	</div> 	-->
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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


</body>
</html>