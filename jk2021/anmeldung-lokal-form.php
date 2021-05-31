<form
	@submit="checkForm"
  	action="form-save.php"
  	method="post"
	
	>
	<div class="form-group">
  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Vorname" @blur="validateVorname" v-model="fldVorname" name="vorname">
	  <p style="color: red">{{ errVorname }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nachname" @blur="validateNachname" v-model="fldNachname" name="nachname">
	  <p style="color: red">{{ errNachname }}</p>
    </div>
  </div>

  <div class="form-group mt-3">
			
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bezirk" @blur="validateBezirk" v-model="fldBezirk" name="bezirk">
			<p style="color: red">{{ errBezirk }}</p>
		</div>
		<div class="form-group mt-3">
			
			<input type="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail-Adresse" @blur="validateEmail" v-model="fldEMail" name="email">
			<p style="color: red">{{ errEmail }}</p>
		</div>
  
 <div class="form-group">
    <label for="exampleFormControlSelect1">Funktion</label>
    <select class="form-control" id="exampleFormControlSelect1" v-model="fldFunktion" name="funktion">
      <option>Bitte wählen...</option>
      <option>Pfarrperson/Pfarrperson im Ruhestand</option>
      <option>Laienmitglied/Sonstiges</option>
    </select>
	<p style="color:red">{{ errFunktion }}</p>
  </div>

  <p>Tageswahl</p>

<div class="row mb-3">
	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="checkBoxEvMi" v-bind:class="{'kachel-active': checkedMI, 'kachel-disabled': !disabledMI  }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="1" id="Mittwochabend" :checked="checkedMI" name="mi" :disabled="!disabledMI">
					<label class="form-check-label" for="defaultCheck1">
						Mittwochabend 
					</label>
					<p>Noch {{ 100 - countlist.del_mi }} Plätze frei</p>
					<div class="progress">
  <div class="progress-bar" role="progressbar" :style="{ width: countlist.del_mi }" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
				</div>
				
			</div>	
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="checkBoxEvDo" v-bind:class="{'kachel-active': checkedDO }">
  				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="1" id="Donnerstag" :checked="checkedDO" name="do">
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
  					<input class="form-check-input" type="checkbox" value="1" id="Freitag" :checked="checkedFR" name="fr">
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
					<input class="form-check-input" type="checkbox" value="1" id="Samstag" :checked="checkedSA" name="sa">
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
		
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="disCheckBoxEvDo" v-bind:class="{'kachel-active': disCheckedDO, 'kachel-disabled': !checkedDO }">
  				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="1" id="disDonnerstag" :checked="disCheckedDO" :disabled="!checkedDO" name="disdo">
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
  					<input class="form-check-input" type="checkbox" value="1" id="disFreitag" :checked="disCheckedFR" :disabled="!checkedFR" name="disfr">
					<label class="form-check-label" for="defaultCheck1">
						Freitag
					</label>
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="disCheckBoxEvSa" v-bind:class="{'kachel-active': disCheckedSA, 'kachel-disabled': !checkedSA }" >
				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="1" id="disSamstag" :checked="disCheckedSA" :disabled="!checkedSA" name="dissa">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

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
    timer: ''
	
  },
  computed: {
    micount: function (data) {
      return this.countlist.del_mi;
    },
	
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
				if (this.checkedMI == true || this.checkedDO == true || this.checkedFR == true || this.checkedSA == true) {
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
});

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