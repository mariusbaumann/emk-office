<html>
<head>
<link rel="stylesheet" type="text/css" href="https://www.emk-office.ch/resources/theme.css">
<title>EMK-Office</title>

<meta charset="utf-8"/>

<meta name="description" content="Website der EMK Zentralverwaltung" />
</head>

<body>

<div id="container">

<div class="icon-line"></div>
<a href="../"><div class="icon-logo-container"><img class="icon-logo" src="../2716-991-max.png"></div></a>



<p class="T1">Anleitung VPN-Verbindung</p>
<div class="align">

<h2>1. Installation Tunnelblick</h2>

<p>Laden Sie den VPN-Client herunter:<a class="inline-link" href="Tunnelblick_3.7.7_build_5150.dmg" download> Tunnelblick_3.7.7_build_5150.dmg</a></p>
<p>Öffnen Sie <b>Tunnelblick_3.7.7_build_5150.dmg</b> mit einem <b>Doppelklick.</b></p>
<p>Klicken Sie <b>doppelt</b> auf das Tunnel-Symbol.</p>
<p><img class="explainimg" src="tunnelblick-installer.png" /></p>
<p>Bestätigen sie die Installation mit Ihrem Administrator-Passwort Ihres Macs.</p>
<p><img class="explainimg" src="tunnelblick-adminbestaetigung.png" /></p>
<p>Nun erschein ein Tunnel-Symbol oben rechts in der Statusleiste (Neben dem W-LAN-Symbol). </p>

<h2>2. Konfiguration Tunnelblick</h2>

<p>Laden Sie die Konfigurations-Datei für Tunnelblick herunter: <a class="inline-link" href="kassiere__ssl_vpn_config.ovpn" download>kassiere__ssl_vpn_config.ovpn</a></p>
<p>Wechseln sie in den <b>Dowload-Ordner</b> und öffnen sie die Datei  <b>kassiere__ssl_vpn_config.ovpn</b> mit einem <b>Doppelklick</b></p>
<p>Wählen sie <b>Nur für diesen Benutzer.</b></p>
<p><img class="explainimg" src="tunnelblick-verbindungsinstallation.png" /></p>
<p>Bestätigen Sie die Installtion der Konfiguration mit ihrem Administrator-Passwort Ihres Macs.</p>
<p><img class=</p>
<p>Die nachfolgende Warnmeldung können sie mit OK bestätigen.</p>

<h2>3. Tunnelblick Verbinden</h2>

<p>Klicken Sie in der Statusleiste auf das Tunnel-Symbol und wählen Sie <b>"kassiere__ssl_vpn_config" verbinden</b></p>
<p><img class="explainimg" src="tunnelblick-verbinden.png" /></p>
<p>Nun erscheint ein Anmeldefenster. Bitte geben sie die ihnen zur verfügung gestellten Informationen ein (Bitte geben Sie <b>nicht</b> ihre persönlichen Daten ein, die benögtigen Sie erst später).</p>
<p><img class="explainimg" src="tunnelblick-anmeldung.png" /></p>
<p>In der oberen rechten Ecke erscheint nun ein Verbindungsstatusfenster. Sobald dieses eine grüne Schrift zeigt, ist die Verbindung erfolgreich hergestellt.</p>

<h2>4. Installation Microsoft Remote Desktop</h2>

<p><a class="inline-link" href="https://itunes.apple.com/ch/app/microsoft-remote-desktop-10/id1295203466?mt=12" target="_blank"/>Klicken Sie auf diesen Link</a> und danach auf <b>Anzeigen in: Mac App Store</b></p>
<p>Klicken Sie auf <b>LADEN</b></p>
<p><img class="explainimg" src="rdp-laden.png" /></p>
<p>Sobald der Download beendet wurde, erscheint ein Button <b>ÖFFNEN</b>. Klicken Sie diesen an.</p>
<p>Nun sehen sie ein leeres Microsoft Remote Desktop Fenster.</p>

<h2>5. Konfiguration Microsoft Remote Desktop</h2>

<p>Laden Sie die Konfigurationsdatei herunter: <a href="DWare_Bezirke_extern_windows.rdp" download>DWare_Bezirke_extern_windows.rdp</a></p>
<p>Wechseln Sie in den Downloads Ordner.</p>
<p>Entfernen sie die Endung <b>.txt</b> indem Sie die Datei umbenennen.</p>
<p><img class="explainimg" src="rdp-dateiendung.png" /></p>
<p>Sie werden nun gefragt ob Sie wirklich die Dateiendung ändern wollen. Bestätigen sie mit <b>.rdp verwenden</b></p>
<p>Öffnen sie die .rdp Datei nun mit einem Doppelklick. Es erscheint ein Fenster von Microsoft Remote Desktop.</p>
<p>Bestätigen sie mit <b>Continue</b></p>
<p><img class="explainimg" src="rdp-anmeldebestaetigung.png" /></p>
<p>Nun erscheint ein Anmeldefenster. Bitte geben sie hier ihre <b>persönlichen</b> Anmeldedaten ein. </p>
<p><b>HINWEIS:</b> Bitte löschen sie die Angabe EMKDOM\ nicht, geben sie stattdessen ihren Benuzernamen nach EMKDOM\ ein.</p>
<p><img class="explainimg" src="rdp-anmeldung.png" /></p>
<p>Bestätigen Sie mit <b>Done</b></p>
<p>Bestätigen Sie mit <b>Continue</b></p>
<p><img class="explainimg" src="rdp-anmeldebestaetigung.png" /></p>
<p>Nun sind Sie wie gewohnt auf dem Server. </p>

<h2>6. Hinzufügen lokaler Laufwerke</h2>
<p>Öffnen Sie <b>Microsoft Remote Desktop.</b></p>
<p>Klicken Sie im Menu am oberen Bildschirmrand auf <b>Connections</b> und anschliessend auf <b>import Desktops...</b></p>
<p><img class="explainimg" src="RDP-ImportDesktops.png" /></p>
<p>Wählen Sie die zu bearbeitende Remote-Desktop-Verbindung aus.</p>
<p><img class="explainimg" src="RDP-ChooseFile2.png" /></p>
<p>Nun erscheint diese Verbindung im Microsoft Remote Desktop Fenster. Klicken sie auf den Bleistift um die Verbindung zu editieren.</p>
<p><img class="explainimg" src="RDP-Connections.png" /></p>
<p>Wechseln Sie auf <b>Local Resources.</b></p>
<p><img class="explainimg" src="RDP-EditResources.png" /></p>
<p>Klicken Sie auf das + Symbol um eine Lokale Resource hinzuzufügen.</p>
<p>Wählen Sie den Order auf ihrem Mac, den sie auch auf dem Server verbunden haben möchten.</p>
<p>Stellen Sie sicher, dass unter <b>User Account, Ask me every time</b> ausgewählt ist </p>
<p>Bestätigen Sie mit <b>Save</b></p>
<p>Wenn Sie nun die Verbindung mit einem Doppelklick starten, wird der lokale Ordner ihres Macs auf dem Server als Netzlaufwerk angezeigt.</p>
<p><b>HINWEIS:</b>Stellen Sie sicher, dass in jedem Fall beim Login <b>EMKDOM\</b> vor ihrem Benutzernamen steht (Das \ ist ein Backslash, auf dem Mac mit der Tastenkombination alt + shift + 7 hinzuzufügen).</p>

</div>
<div id="status" width="20%">

</div>

</div>
</div>
</body>
</html>