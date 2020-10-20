<html>
<head>

<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../resources/theme.css">
<script src="https://kit.fontawesome.com/39876f8fd5.js" crossorigin="anonymous"></script>
<title>EMK-Office</title>

<meta charset="utf-8"/>

<meta name="description" content="Website der EMK Zentralverwaltung" />
</head>

<body>
<div id="container">


<div class="icon-line"></div>
<a href="../"><div class="icon-logo-container"><img class="icon-logo" src="../2716-991-max.png"></div></a>


<div class="kacheln">
	<div class="align">
		<a href="mac-user.php" >
			<div class="element">
				<p class="T2">Mac Benutzer/innen</p>
				<i class="front-icon fab fa-apple"></i><br/>
				<p>Mac Benutzer/innen klicken bitte hier. <br/>&nbsp; </p>
			</div>
		</a>
		<a href="mitarbeiter.php">
			<div class="element">
				<p class="T2">Mitarbeiter/innen</p>
				<i class="front-icon fas fa-user-friends"></i><br/>
				<p>Mitarbeiter/innen der zentralen Dienste klicken bitte hier.</p>
			</div>
		</a>
	</div>
</div>
<div class="body">
<p class="T1">Anleitung VPN-Verbindung</p>
<div class="align">


<h2>1. Download VPN-Client</h2>

<p>Laden Sie den VPN-Client herunter: <a class="inline-link" href="kassiere__ssl_vpn_client.exe">Kassiere VPN Client</a></p>


<h2>2. Installation VPN-Client</h2>

<p>Wenn der Download abgeschlossen ist, führen Sie die Installationsdatei aus. </p>
<img>
<p>Nun errscheint in der Taskleiste ein Ampelsymbol welches auf rot steht. </p>
<img class="explainimg" src="ampel.png">
<h2>3. Verbinden</h2>

<p>Öffnen Sie das Kontext-Menü mit einerm Rechtsklick auf das Aampelsymbol und wählen Sie Verbinden. </p>
<img style="width:300px" class="explainimg" src="verbinden.png">
<p>Nun erscheint ein Login-Fenster. Geben Sie die ihnen zur Verfügung gestellten <b>allgemienen</b> VPN-Angaben ein. Bestätigen Sie mit OK. </p>
<img  class="explainimg" src="vpnlogin.png">
<p>Die Ampel wechselt nach ein paar Sekunen auf Grün.</p>

<h2>4. Remotedesktop-Verbindung</h2>

<p>Laden Sie die Konfigurationsdatei für die Remote-Desktop-Verbindung herunter: <a class="inline-link" href="DWare_Bezirke_extern_windows.rdp" download>DWare_Bezirke_extern_windows.rdp</a></p>

<p>Öffnen Sie diese Datei mit einem Doppelklick und melden Sie sich mit ihren <b>persönlichen</b> Login-Daten an. </p>

<p><img class="explainimg"  src="rdplogin.png"></p>

<h2>5. Verbindung trennen (Wichtig)</h2>

<p>Da die Anzahl gleichzeitiger Verbindungen begrenzt ist, ist es essentiell die Verbindung nach Gebrauch wieder zu trennen. Dazu führen Sie bitte folgende Schritte aus:</p>

<p>Schliessen Sie DWare, so das Sie den Desktop des Servers sehen (Grauer hintergrund)</p>
<p>Klicken Sie doppelt auf das das grüne Pfeilsymbol auf dem Desktop.</p>
<p><img class="explainimg" style="width: 50px" src="trennen.png"></p>
<p>Die Remote-Desktop-Verbindung wird nun getrennt und Sie landen wieder auf dem Desktop ihres lokalen Computers</p>
<p>Klicken Sie, mit einem Rechtsklick, rechts unten auf das Ampelsymbol (siehe Punkt 2) und klicken Sie auf <b>Trennen</b></p>

<h2>6. Laufwerk C: des eigenen Computers aktivieren (optional)</h2>
<p>Falls Sie gerne das Laufwerk C: des eigenen Computers auch auf dem Server sehen möchten (z.B. um Dokummente zu ihnen zu verschieben) befoglen Sie bitte die nachfolgendnen Schritte: </p>

<p>Klicken Sie mit einem <b>Rechtsklick</b> auf die Datei <b>DWare_Bezirke_extern_windows.rdp</b></p>
<p>Klicken Sie auf <b>Bearbeiten</b></p>
<p><img  class="explainimg" src="remote-desktop-verbindung-bearbeiten.png"></p>

<p>Im folgenden Fenster wählen Sie den Abschnitt <b>Lokale Ressourccen</b> und klicken Sie auf <b>Weitere:</b></p>
<p><img class="explainimg" src="ressourcen-oeffnen.png"></p>
<p>Klicken Sie auf das Plus-Symbol neben <b>Laufwerke</b> um die Kategorie aufzuklappen. Aktivieren Sie <b>OS (C:), </b>bestätigen Sie mit OK.</p>
<p><img class="explainimg" src="laufwerk-aktivieren.png" /></p>
<p>Wechseln Sie in den Bereich <b>Allgemein</b>und dann auf <b>Speichern</b></p>
<p><img class="explainimg" src="speichern-allgemein.png" /></p>
<p>Danach können Sie sich Verbinden und das Laufwerk C: Ihres Computers wird nun auf dem Server verbunden. </p>


</div>
<div id="status" width="20%">

</div>
</div>

</div>
</body>
</html>