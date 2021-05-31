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
	<p>Bitte füllen Sie das nachfolgende Formular für jede Person einzeln aus. Namensangaben wie "Peter und Claudia Müller" können wir aus organisatorischen Gründen nich annehmen.
	 </p>

	<h4>Covid-Massnahmen</h4>
	<p>Aufgrund der Covid-Massnahmen sind pro Tag nur 100 Personen erlaubt. Sollte an gewissen Tagen das Limit überschritten werden, werden wir Personen bitten auf Zoom zu wechseln.</p> 

	<?php 
	
	$now = new DateTime('now');
	$opening = new DateTime('2021-05-31 17:00');
	#$opening = new DateTime('2021-05-28 12:14');
	$closing = new DateTime('2021-06-02 23:59');
	#$closing = new DateTime('2021-05-28 19:00');


	#$diffSeconds = $interval['d'] * 24 * 60 * 60 + $interval['h'] * 60 * 60 + $interval['i'] * 60 + $interval['s'];

	if ($now < $opening) {
		echo "<h4>Das Formular wird erst am 31.05.2021 um 17:00 Uhr aufgeschaltet<h4>";
		print("<script>setTimeout(function(){
			window.location.reload(1);
		 }, 30000); </script>");
	} else if ($now > $closing) {
		echo "<h4>Der Anmeldeschluss ist vorüber</h4>";
		
	} else {
		include('anmeldung-lokal-form.php');
	}

	
	
	?>




<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>
</html>