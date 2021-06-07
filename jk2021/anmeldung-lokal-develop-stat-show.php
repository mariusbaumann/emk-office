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
	<p>Legende: <span class="badge" style="background-color: #007bff; color: white ">Pfarrpersonen</span> <span class="badge badge-danger">Laien</span>
	<hr>

	<div class="row mb-3">
		<div class="col-3 col-xs-12">
			<div class="kachel" v-on:click="checkBoxEvMi" v-bind:class="{'kachel-active': checkedMI, 'kachel-disabled': !disabledMI  }">
				<h5 class="mb-2" v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Mittwochabend</h5>

				<h3> {{  countlist.del_mi_PF + countlist.del_mi_LA }}/100 </h3>
				<p>Plätze gebucht</p>
				
				<div class="progress" >
					<div class="progress-bar bg-primary" :style="{ width: countlist.del_mi_PF + '%' }" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_mi_PF }}</div>
					<div class="progress-bar bg-danger" :style="{ width: countlist.del_mi_LA + '%' }"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_mi_LA }}</div>
				</div>
				<!--<p class="mt-3">davon zur Abwahl vermerkt: </p>
				<h3>{{ countlist.del_dismi_PF + countlist.del_dismi_LA }}<h3>
				-->
			</div>		
		</div>
		<div class="col-3 col-xs-12">
			<div class="kachel" v-on:click="checkBoxEvMi" v-bind:class="{'kachel-active': checkedMI, 'kachel-disabled': !disabledMI  }">
				<h5 class="mb-2" v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Donnerstag</h5>

				<h3 v-if="genLang == 'de'" > {{  countlist.del_do_PF + countlist.del_do_LA }}/100 </h3>
				<p>Plätze gebucht</p>
				
				<div class="progress" class="mb-3">
					<div class="progress-bar bg-primary" :style="{ width: countlist.del_do_PF + '%' }" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_do_PF }}</div>
					<div class="progress-bar bg-danger" :style="{ width: countlist.del_do_LA + '%' }"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_do_LA }}</div>
				</div>
				<p class="mt-3">davon zur Abwahl vermerkt: </p>
				<h3>{{ countlist.del_disdo_PF + countlist.del_disdo_LA }}<h3>
			</div>		
		</div>
		<div class="col-3 col-xs-12">
			<div class="kachel" v-on:click="checkBoxEvMi" v-bind:class="{'kachel-active': checkedMI, 'kachel-disabled': !disabledMI  }">
				<h5 class="mb-2" v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Freitag</h5>

				<h3 v-if="genLang == 'de'" > {{  countlist.del_fr_PF + countlist.del_fr_LA }}/100 </h3>
				<p>Plätze gebucht</p>
				
				<div class="progress" class="mb-3">
					<div class="progress-bar bg-primary" :style="{ width: countlist.del_fr_PF + '%' }" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_fr_PF }}</div>
					<div class="progress-bar bg-danger" :style="{ width: countlist.del_fr_LA + '%' }"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_fr_LA }}</div>
				</div>
				<p class="mt-3">davon zur Abwahl vermerkt: </p>
				<h3>{{ countlist.del_disfr_PF + countlist.del_disfr_LA }}<h3>
			</div>		
		</div>
		<div class="col-3 col-xs-12">
			<div class="kachel" v-on:click="checkBoxEvMi" v-bind:class="{'kachel-active': checkedMI, 'kachel-disabled': !disabledMI  }">
				<h5 class="mb-2" v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Samstag</h5>

				<h3 v-if="genLang == 'de'" > {{  countlist.del_sa_PF + countlist.del_sa_LA }}/100 </h3>
				<p>Plätze gebucht</p>
				
				<div class="progress" class="mb-3">
					<div class="progress-bar bg-primary" :style="{ width: countlist.del_sa_PF + '%'  }" aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_sa_PF }}</div>
					<div class="progress-bar bg-danger" :style="{ width: countlist.del_sa_LA + '%' }"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="50">{{ countlist.del_sa_LA }}</div>
				</div>
				<p class="mt-3">davon zur Abwahl vermerkt: </p>
				<h3>{{ countlist.del_dissa_PF + countlist.del_dissa_LA }}<h3>
			</div>		
		</div>
	</div>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Vorname</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      
    </tr>
  </thead>
  <tbody>
    <tr v-for="name in namesList" :key="name.index">
      <td>{{ name.del_vorname}}</td>
      <td>{{ name.del_nachname}}</td>
      <td>{{ name.del_email}}</td>
    </tr>
	</tbody>
	</table>
</div>
	
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
	lang: '',
	namesList: ''
	
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
					if (this.disCheckedMI == true || this.disCheckedDO == true || this.disCheckedFR == true || this.disCheckedSA == true) {
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

$.get("serve-counts-stat.php", function(data, status){
    console.log(data);
	app.countlist = JSON.parse(data);
});

$.get("serve-counts-stat-names.php", function(data, status){
    console.log(data);
	app.namesList = JSON.parse(data);
});

window.setInterval(function(){
	$.get("serve-counts-stat.php", function(data, status){
    console.log(data);
	app.countlist = JSON.parse(data);
  });

  $.get("serve-counts-stat-names.php", function(data, status){
    console.log(data);
	app.namesList = JSON.parse(data);
});
}, 10000);

</script>

</body>
</html>