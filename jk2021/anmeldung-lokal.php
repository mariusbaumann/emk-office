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
	<p>Aufgrund der Covid-Massnahmen sind pro Tag nur 100 Personen erlaubt. Sie dürfen sich also für 2 der 3 Konferenztage anmelden. Die 100 Plätze werden gleichmässig zwischen Pfarrpersonen und Laien aufgeteilt. Es sind somit jeweils 50 Plätze/Tag verfügbar. Der Mittwochabend bietet unabhängig davon 100 Plätze, der/die Schnellere gewinnt.</p> 

	<form>
	<div class="form-group">
  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Vorname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nachname">
    </div>
  </div>

  <div class="form-group mt-3">
			
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bezirk">
		</div>
		<div class="form-group mt-3">
			
			<input type="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail-Adresse">
		</div>
  
 <div class="form-group">
    <label for="exampleFormControlSelect1">Funktion</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Bitte wählen...</option>
      <option>Pfarrperson</option>
      <option>Laienmitglied</option>
    </select>
  </div>

  <p>Tageswahl</p>

<div class="row">
	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					<label class="form-check-label" for="defaultCheck1">
						Mittwochabend
					</label>
				</div>
				<h2>34 von 50</h2>
				<p>Plätzen frei</p>
				<div class="progress">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar bg-secondary" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
						<!--<div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20 Enthalungen</div>-->
			</div>
			</div>	
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel">
  				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
					<label class="form-check-label" for="defaultCheck2">
						Donnerstag
					</label>	
				</div>
				<h2>34 von 50</h2>
				<p>Plätzen frei</p>
				<div class="progress">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar bg-secondary" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
						<!--<div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20 Enthalungen</div>-->
			</div>
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div>
			<div class="kachel">
				<div class="form-check mb-2">
  					<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					<label class="form-check-label" for="defaultCheck1">
						Freitag
					</label>
				</div>
				<h2>34 von 50</h2>
				<p>Plätzen frei</p>
				<div class="progress">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar bg-secondary" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
						<!--<div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20 Enthalungen</div>-->
			</div>
			</div>
		</div>
	</div>

	<div class="col-3 col-xs-12">
		<div >
			<div class="kachel">
				<div class="form-check mb-2">
					<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					<label class="form-check-label" for="defaultCheck1">
						Samstag
					</label>
				</div>
				<h2>34 von 50</h2>
				<p>Plätzen frei {{ message }}</p>
				<div class="progress">
						<div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar bg-secondary" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
						<!--<div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20 Enthalungen</div>-->
			</div>
			</div>
		</div>
	</div>

</div>
		
	<div class="mt-3">
		<button type="submit" class="btn btn-primary">Submit</button>
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
    message: 'Hello Vue!'
  }
})
</script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>
</html>