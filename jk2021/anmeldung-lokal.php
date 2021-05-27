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

	
	<h2>Anmeldung für die Teilnahme vor Ort</h2>
	<p>Bitte füllen Sie das nachfolgende Formular für jede Person einzeln aus. Namensangaben wie "Peter und Claudia Müller" können wir aus organisatorischen gründen nicht akzeptieren.
	 </p>

	<h4>Covid-Massnahmen</h4>
	<p>Aufgrund der Covid-Massnahmen sind pro Tag nur 100 Personen erlaubt. Sollte an gewissen Tagen das Limit überschritten werden, werden wir Personenen bitten auf Zoom zu wechseln.</p> 

	<form
	@submit="checkForm"
  	action="https://vuejs.org/"
  	method="post"
	
	>
	<div class="form-group">
  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Vorname" @blur="validateVorname" v-model="fldVorname">
	  <p style="color: red">{{ errVorname }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nachname" @blur="validateNachname" v-model="fldNachname">
	  <p style="color: red">{{ errNachname }}</p>
    </div>
  </div>

  <div class="form-group mt-3">
			
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bezirk" @blur="validateBezirk" v-model="fldBezirk">
			<p style="color: red">{{ errBezirk }}</p>
		</div>
		<div class="form-group mt-3">
			
			<input type="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail-Adresse" @blur="validateEmail" v-model="fldEMail">
			<p style="color: red">{{ errEmail }}</p>
		</div>
  
 <div class="form-group">
    <label for="exampleFormControlSelect1">Funktion</label>
    <select class="form-control" id="exampleFormControlSelect1" v-model="fldFunktion">
      <option>Bitte wählen...</option>
      <option>Pfarrperson/Ehm. Pfarrperson</option>
      <option>Laienmitglied/Sonstiges</option>
    </select>
	<p style="color:red">{{ errFunktion }}</p>
  </div>

  <p>Tageswahl</p>

<div class="row mb-3">
	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="checkBoxEvMi" v-bind:class="{'kachel-active': checkedMI }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="" id="Mittwochabend" :checked="checkedMI" >
					<label class="form-check-label" for="defaultCheck1">
						Mittwochabend
					</label>
				</div>
				
			</div>	
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="checkBoxEvDo" v-bind:class="{'kachel-active': checkedDO }">
  				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="" id="Donnerstag" :checked="checkedDO">
					<label class="form-check-label" for="defaultCheck2">
						Donnerstag
					</label>	
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="checkBoxEvFr" v-bind:class="{'kachel-active': checkedFR }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="" id="Freitag" :checked="checkedFR">
					<label class="form-check-label" for="defaultCheck1">
						Freitag
					</label>
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="checkBoxEvSa" v-bind:class="{'kachel-active': checkedSA }">
				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="" id="Samstag" :checked="checkedSA">
					<label class="form-check-label" for="defaultCheck1">
						Samstag
					</label>
				</div>
				
			</div>
		</div>
	</div>

</div>
<p style="color: red">{{ errTageswahl }}</p>
<p>Auf diese Tage könnte ich im Falle einer Limitüberschreitung verzichten (mind. 1 Tag anwählen): </p>

<div class="row mb-3">
	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="disCheckBoxEvMi" v-bind:class="{'kachel-active': disCheckedMI, 'kachel-disabled': !checkedMI }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="" id="disMittwochabend" :checked="disCheckedMI" :disabled="!checkedMI">
					<label class="form-check-label" for="defaultCheck1">
						Mittwochabend
					</label>
				</div>
				
			</div>	
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="disCheckBoxEvDo" v-bind:class="{'kachel-active': disCheckedDO, 'kachel-disabled': !checkedDO }">
  				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="" id="disDonnerstag" :checked="disCheckedDO" :disabled="!checkedDO">
					<label class="form-check-label" for="defaultCheck2">
						Donnerstag
					</label>	
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="disCheckBoxEvFr" v-bind:class="{'kachel-active': disCheckedFR, 'kachel-disabled': !checkedFR }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="" id="disFreitag" :checked="disCheckedFR" :disabled="!checkedFR">
					<label class="form-check-label" for="defaultCheck1">
						Freitag
					</label>
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="disCheckBoxEvSa" v-bind:class="{'kachel-active': disCheckedSA, 'kachel-disabled': !checkedSA }">
				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="" id="disSamstag" :checked="disCheckedSA" :disabled="!checkedSA">
					<label class="form-check-label" for="defaultCheck1">
						Samstag
					</label>
				</div>
				
			</div>
		</div>
	</div>
	

</div>
<p style="color: red">{{ errVerzichtwahl }}</p>



	<div class="mt-3">
		<button type="submit" class="btn btn-primary">Absenden</button>
	</div>
	</form>
	
				
	
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

</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

<script >
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
	errVerzichtwahl: ""
	
  },
  methods: {
	  checkBoxEvMi: function () {
		  console.log(this.checkedMI)
		  if (this.checkedMI == true) {
			this.checkedMI = false;
			this.disCheckedMI = false;
		  }else{
			this.checkedMI = true;
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
			this.errVorname = "Feld darf nicht leer sein";
			return false;
		}
		else {
			this.errVorname = "";
			return true;
		}


	  },
	  validateNachname: function () {
		if (this.fldNachname === "") {
			this.errNachname = "Feld darf nicht leer sein";
			return false;
		} 
		else {
			this.errNachname = "";
			return true;
		}

	  },

	  validateBezirk: function () {
		if (this.fldBezirk === "") {
			this.errBezirk = "Feld darf nicht leer sein";
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
			this.errEmail = "Feld darf nicht leer sein."
			return false;
		} else {
			if (this.fldEMail.search('[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]+') != 0) {
				this.errEmail = "E-Mail-Adresse nicht gültig";
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
			if (this.fldFunktion === "" || this.fldFunktion == "Bitte wählen...") {
				this.errFunktion = "Bitte wählen Sie eine Funktion";
			}
			else {
				this.errFunktion = "";
				if (this.checkedMI == true || this.checkedDO == true || this.checkedFR == true || this.checkeSA == true) {
					this.errTageswahl = "";
					if (this.disCheckedMI == true || this.disCheckedDO == true || this.disCheckedFR == true || this.disCheckedSA == true) {
						this.errVerzichtwahl = ""
						return true; 
					} else {
						this.errVerzichtwahl = "Bitte wählen Sie mindestens einen Tag auf den sie verzichten können aus."
					}
				} else {
					console.log("true");
					this.errTageswahl = "Bitte wählen Sie mindestens einen der Tage aus";
				}
			}
		}
		else {
			  console.log("so bad");
		}

		  e.preventDefault();

	  }
  }
})
</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>
</html>