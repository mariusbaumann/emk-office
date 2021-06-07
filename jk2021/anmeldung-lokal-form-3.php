<form
	@submit="checkForm"
  	action="form-save.php"
  	method="post"
	
	>
	<div class="form-group">
  <div class="row mb-3">
    <div class="col">
      <input v-if="genLang == 'de'" type="text" class="form-control" placeholder="Vorname" @blur="validateVorname" v-model="fldVorname" name="vorname">
	  <input v-if="genLang == 'fr'" type="text" class="form-control" placeholder="Prénom" @blur="validateVorname" v-model="fldVorname" name="vorname">
	  <p style="color: red">{{ errVorname }}</p>
    </div>
    <div class="col">
      <input v-if="genLang == 'de'" type="text" class="form-control" placeholder="Nachname" @blur="validateNachname" v-model="fldNachname" name="nachname">
	  <input v-if="genLang == 'fr'" type="text" class="form-control" placeholder="Nom" @blur="validateNachname" v-model="fldNachname" name="nachname">
	  <p style="color: red">{{ errNachname }}</p>
    </div>
  </div>

  <div class="form-group mt-3">
			<input v-if="genLang == 'de'" type="text" class="form-control" id="exampleInputPassword1" placeholder="Bezirk" @blur="validateBezirk" v-model="fldBezirk" name="bezirk">
			<input v-if="genLang == 'fr'" type="text" class="form-control" id="exampleInputPassword1" placeholder="Circuit" @blur="validateBezirk" v-model="fldBezirk" name="bezirk">

			<p style="color: red">{{ errBezirk }}</p>
		</div>
		<div class="form-group mt-3">
			<input v-if="genLang == 'de'" type="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail-Adresse" @blur="validateEmail" v-model="fldEMail" name="email">
			<input v-if="genLang == 'fr'" type="email" class="form-control" id="exampleInputPassword1" placeholder="Courriel" @blur="validateEmail" v-model="fldEMail" name="email">

			<p style="color: red">{{ errEmail }}</p>
		</div>
  
 <div class="form-group">
    <label v-if="genLang == 'de'" for="exampleFormControlSelect1">Funktion</label>
	<label v-if="genLang == 'fr'" for="exampleFormControlSelect1">Fonction </label>
    <select class="form-control" id="exampleFormControlSelect1" v-model="fldFunktion" name="funktion">
      <option v-if="genLang == 'de'">Bitte wählen...</option>
      <option v-if="genLang == 'de'">Pfarrperson/Pfarrperson im Ruhestand</option>
      <option v-if="genLang == 'de'">Laienmitglied/Sonstiges</option>
	  <option v-if="genLang == 'fr'">Veuillez sélectionner…</option>
      <option v-if="genLang == 'fr'">Membre du corps pastoral/membre du corps pastoral à la retraite</option>
      <option v-if="genLang == 'fr'">Membre laïque/autre</option>
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
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Mittwochabend</label>
					

					<p v-if="genLang == 'de'" >Noch {{ 100 - countlist.del_mi }} Plätze frei</p>
					<p v-if="genLang == 'fr'" >Encore {{ 100 - countlist.del_mi }} places disponibles</p>
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
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck2">Donnerstag</label>	
					<label v-if="genLang == 'fr'" class="form-check-label" for="defaultCheck2">Jeudi</label>	

				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="checkBoxEvFr" v-bind:class="{'kachel-active': checkedFR }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="1" id="Freitag" :checked="checkedFR" name="fr">
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Freitag</label>
					<label v-if="genLang == 'fr'" class="form-check-label" for="defaultCheck1">Vendredi</label>

				</div>
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="checkBoxEvSa" v-bind:class="{'kachel-active': checkedSA }">
				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="1" id="Samstag" :checked="checkedSA" name="sa">
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Samstag</label>
					<label v-if="genLang == 'fr'" class="form-check-label" for="defaultCheck1">Samedi</label>
				</div>
			</div>
		</div>
	</div>

</div>
<p style="color: red">{{ errTageswahl }}</p>
<p v-if="genLang == 'de'">Auf diese Tage könnte ich im Falle einer Limitüberschreitung verzichten (mind. 1 Tag anwählen): </p>
<p v-if="genLang == 'fr'">En cas de dépassement des limites autorisées, je pourrais renoncer à assister sur place aux jours suivants (choisir au moins un jour) : </p>

<div class="row mb-3">
	<div class="col-3 col-xs-12">
		
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="disCheckBoxEvDo" v-bind:class="{'kachel-active': disCheckedDO, 'kachel-disabled': !checkedDO }">
  				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="1" id="disDonnerstag" :checked="disCheckedDO" :disabled="!checkedDO" name="disdo">
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck2">Donnerstag</label>	
					<label v-if="genLang == 'fr'" lass="form-check-label" for="defaultCheck2">Jeudi</label>	

				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel" v-on:click="disCheckBoxEvFr" v-bind:class="{'kachel-active': disCheckedFR, 'kachel-disabled': !checkedFR }">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="1" id="disFreitag" :checked="disCheckedFR" :disabled="!checkedFR" name="disfr">
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Freitag</label>
					<label v-if="genLang == 'fr'" class="form-check-label" for="defaultCheck1">Vendredi</label>
					
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel" v-on:click="disCheckBoxEvSa" v-bind:class="{'kachel-active': disCheckedSA, 'kachel-disabled': !checkedSA }" >
				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="1" id="disSamstag" :checked="disCheckedSA" :disabled="!checkedSA" name="dissa">
					<label v-if="genLang == 'de'" class="form-check-label" for="defaultCheck1">Samstag</label>
					<label v-if="genLang == 'fr'" class="form-check-label" for="defaultCheck1">Samedi</label>
				
				</div>
			</div>
		</div>
	</div>
	

</div>
<p style="color: red">{{ errVerzichtwahl }}</p>

<input v-if="genLang == 'de'" type="hidden" id="custId" name="lang" value="de">
<input v-if="genLang == 'fr'" type="hidden" id="custId" name="lang" value="fr">

	<div class="mt-3">
		<button v-if="genLang == 'de'" type="submit" class="btn btn-primary">Absenden</button>
		<button v-if="genLang == 'fr'" type="submit" class="btn btn-primary">Envoyer</button>
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

