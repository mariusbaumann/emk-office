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

	
	<h2 v-if="genLang == 'de'">Anmeldung für die Teilnahme vor Ort</h2>
	<h2 v-if="genLang == 'fr'">Inscription pour participer en présentiel</h2>
	<p v-if="genLang == 'de'">Bitte füllen Sie das nachfolgende Formular für jede Person einzeln aus. Namensangaben wie "Peter und Claudia Müller" können wir aus organisatorischen Gründen nich annehmen.</p>
	<p v-if="genLang == 'fr'">Nous prions chaque personne de remplir le formulaire individuellement. Pour des raisons organisationnelles, les indications de noms comme « Pierre et Claudia Muller » ne pourront pas être enregistrées.</p>


	<h4 v-if="genLang == 'de'">Covid-Massnahmen</h4>
	<h4 v-if="genLang == 'fr'">Mesures liées au COVID-19</h4>
	<p v-if="genLang == 'de'">Aufgrund der Covid-Massnahmen sind pro Tag nur 100 Personen erlaubt. Sollte an gewissen Tagen das Limit überschritten werden, werden wir Personen bitten auf Zoom zu wechseln.</p> 
	<p v-if="genLang == 'fr'">En raison des mesures liées au COVID-19, seules 100 personnes pourront assister à la session en présentiel. Si cette limite devait être atteinte durant une ou plusieurs journées, un certain nombre de personnes serait prié de suivre la conférence par ZOOM.</p> 

	<?php 
	
	$now = new DateTime('now');
	$opening = new DateTime('2021-05-31 17:00');
	#$opening = new DateTime('2021-05-28 12:14');
	$closing = new DateTime('2021-06-02 23:59');
	#$closing = new DateTime('2021-05-31 19:00');


	#$diffSeconds = $interval['d'] * 24 * 60 * 60 + $interval['h'] * 60 * 60 + $interval['i'] * 60 + $interval['s'];

	if ($now < $opening) {
		echo '<h4 v-if="genLang == \'de\'">Das Formular wird erst am 31.05.2021 um 17:00 Uhr aufgeschaltet</h4><h4 v-if="genLang == \'fr\'">Le formulaire ne sera pas activé avant le 31.05.2021 à 17h00.</h4>';
		print("<script>setTimeout(function(){
			window.location.reload(1);
		 }, 30000); </script>");
	} else if ($now > $closing) {
		echo "<h4 genLang == 'de'>Der Anmeldeschluss ist vorüber</h4><h4 genLang == 'fr'>La date limite d'inscription est dépassée</h4>";
		
	} else {
		include('son-anmeldung-lokal-form.php');
	}

	
	
	?>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script >
var countdata = ""; 




var app = new Vue({
  el: '#app',
  data: {
	checkedMI: false,
	checkedDO: false,
	checkedFR: false,
	checkedSA: false,
	disCheckedMI: false,
	disCheckedDO: false,
	disCheckedFR: false,
	disCheckedSA: false,
	disabledMI: true, 
	disabledDO: true,
	disabledFR: true,
	disabledSA: true,
	fldVorname: "",
	fldNachname: "",
	fldEMail: "",
	fldFunktion: "",
	fldBezirk: "",
	validationErrors: [],
	errVorname: "",
	errNachname: "", 
	errEmail:"",
	errBezirk: "",
	errFunktion: "",
	errTageswahl: "",
	errVerzichtwahl: "",
	countlist: {},
    timer: '',
	lang: ''
	
  },
  computed: {
    micount: function (data) {
      return this.countlist.del_mi;
    },
	genLang: function (data) {
		if (this.lang == "ch-FR" || this.lang == "fr-FR" || this.lang == "fr" ){
			return "fr";
		} else {
			return "de";
		}
		 
	}
  },
  watch: {
	countlist: function (newVal, oldVal) {
		console.log(newVal.del_mi);
      if (newVal.del_mi > 99) {
		  this.disabledMI = false;
	  } else {
		  this.disabledMI = true;
	  }
    }
  },
  methods: {
	  checkBoxEvMi: function () {

		  console.log(this.checkedMI)
		 if (this.disabledMI == true) { 
		  if (this.checkedMI == true) {
			this.checkedMI = false;
			this.disCheckedMI = false;
		  }else{
			this.checkedMI = true;
		  }
		}
		  
	  },
	  checkBoxEvDo: function () {
		  console.log(this.checkedDO)
		  if (this.checkedDO == true) {
			this.checkedDO = false;
			this.disCheckedDO = false;
		  }else{
			this.checkedDO = true;
		  }
		  
	  },
	  checkBoxEvFr: function () {
		  console.log(this.checkedFR)
		  if (this.checkedFR == true) {
			this.checkedFR = false;
			this.disCheckedFR = false;
		  }else{
			this.checkedFR = true;
		  }
		  
	  },
	  checkBoxEvSa: function () {
		  console.log(this.checkedSA)
		  if (this.checkedSA == true) {
			this.checkedSA = false;
			this.disCheckedSA = false;
		  }else{
			this.checkedSA = true;
		  }
		  
	  },
	  disCheckBoxEvMi: function () {
		  if (this.checkedMI == true) {
			console.log(this.disCheckedMI)
		  	if (this.disCheckedMI == true) {
				this.disCheckedMI = false;
		  	}else{
				this.disCheckedMI = true;
		  }
		  }
		  
		  
	  },
	  disCheckBoxEvDo: function () {
		if (this.checkedDO == true) {
		  console.log(this.disCheckedDO)
		  if (this.disCheckedDO == true) {
			this.disCheckedDO = false;
		  }else{
			this.disCheckedDO = true;
		  }
		}
		  
	  },
	  disCheckBoxEvFr: function () {
		if (this.checkedFR == true) {
		  console.log(this.disCheckedFR)
		  if (this.disCheckedFR == true) {
			this.disCheckedFR = false;
		  }else{
			this.disCheckedFR = true;
		  }
		} 
	  },
	  disCheckBoxEvSa: function () {
		if (this.checkedSA == true) {
		  console.log(this.disCheckedSA)
		  if (this.disCheckedSA == true) {
			this.disCheckedSA = false;
		  }else{
			this.disCheckedSA = true;
		  }
		} 
	  },
	  validateVorname: function () {
		if (this.fldVorname === "") {
			if (this.genLang == "fr") {
				this.errVorname = "Le formulaire ne doit pas être vide";
			} else {
				this.errVorname = "Feld darf nicht leer sein";
			}
			return false;
		}
		else {
			this.errVorname = "";
			return true;
		}


	  },
	  validateNachname: function () {
		if (this.fldNachname === "") {
			if (this.genLang == "fr") {
				this.errNachname = "Le formulaire ne doit pas être vide";
			} else {
				this.errNachname = "Feld darf nicht leer sein";
			}
			return false;
		} 
		else {
			this.errNachname = "";
			return true;
		}

	  },

	  validateBezirk: function () {
		if (this.fldBezirk === "") {
			if (this.genLang == "fr") {
				this.errBezirk = "Le formulaire ne doit pas être vide";
			} else {
				this.errBezirk = "Feld darf nicht leer sein";
			}
			return false;
		}
		else {
			this.errBezirk = ""
			return true;
		}


	  },
	  validateEmail: function () {
		  console.log(this.fldEMail.search('[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]+'))
		if (this.fldEMail === ""){
			if (this.genLang == "fr") {
				this.errEmail = "Le formulaire ne doit pas être vide";
			} else {
				this.errEmail = "Feld darf nicht leer sein";
			}
			return false;
		} else {
			if (this.fldEMail.search('[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]+') != 0) {
				if (this.genLang == "fr") {
				this.errEmail = "L'adresse e-mail n'est pas valide.";
			} else {
				this.errEmail = "Die E-Mail-Adresse ist nicht gültig.";
			}
				return false;
			}
			else {
				this.errEmail = "";
				return true;
			}
		}

	  },
	  checkForm: function (e) {
		  if (this.validateVorname() && this.validateNachname() && this.validateBezirk() && this.validateEmail()) {
				if (this.fldFunktion === "" || this.fldFunktion == "Bitte wählen..." || this.fldFunktion == "Veuillez sélectionner…") {
					if (this.genLang == "fr") {
						this.errFunktion = "Veuillez sélectionner une fonction.";
					} else {
						this.errFunktion = "Bitte wählen sie eine Funktion.";
					}
			}
			else {
				this.errFunktion = "";
				if (this.checkedMI == true || this.checkedDO == true || this.checkedFR == true || this.checkedSA == true) {
					this.errTageswahl = "";
					if (this.disCheckedDO == true || this.disCheckedFR == true || this.disCheckedSA == true || (this.checkedDO == false && this.checkedFR == false && this.checkedSA == false && this.checkedMI == true)) {
						this.errVerzichtwahl = ""
						return true; 
					} else {
						if (this.genLang == "fr") {
							this.errVerzichtwahl = "Veuillez choisir au moins un jour dont vous pouvez vous passer.";
						} else {
							this.errVerzichtwahl = "Bitte wählen Sie mindestens einen Tag auf den sie verzichten können aus.";
						}
						
					}
				} else {
					console.log("true");
					if (this.genLang == "fr") {
							this.errTageswahl = "Veuillez choisir au moins un des jours suivants.";
						} else {
							this.errTageswahl = "Bitte wählen Sie mindestens einen der Tage aus.";
						}
				}
			}
		}
		else {
			  console.log("so bad");
		}

		  e.preventDefault();

	  }
  }
});

app.lang = navigator.language || navigator.userLanguage; 

$.get("serve-counts.php", function(data, status){
    console.log(data);
	app.countlist = JSON.parse(data);
});

window.setInterval(function(){
	$.get("serve-counts.php", function(data, status){
    console.log(data);
	app.countlist = JSON.parse(data);
  });
}, 5000);

</script>

</body>
</html>