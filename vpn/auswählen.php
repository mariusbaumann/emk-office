<html>
<head>
<link rel="stylesheet" type="text/css" href="https://www.emk-office.ch/resources/theme.css">
<title>Zentralverwaltung:</title>

<meta charset="utf-8"/>

<meta name="description" content="Website der EMK Zentralverwaltung" />
</head>

<body>
<div class="header">
<span><img class="logo" src='http://www.emk-schweiz.ch/fileadmin/template/main/images/logo.gif' /></span>
<span align="right"><img class="logo" src='/resources/logo-zahlstelle.jpg' /></span>
</div>
<div class="body">
<p class="T1">Anleitung VPN-Verbindung für Kassiere</p>
<div class="align">

<h2>1. Download VPN-Client</h2>

<p>Laden sie den VPN-Client herunter: <a href="kassiere__ssl_vpn_client.exe">Kassiere VPN Client</a></p>


<h2>2. Installation VPN-Client</h2>

<p>Wenn der Download abgeschlossen ist, führen sie die Installationsdatei aus. </p>
<img>
<p>Nun errscheint in der Taskleiste ein Ampelsymbol welches auf rot steht. </p>
<img class="explainimg" src="ampel.png">
<h2>3. Verbinden</h2>

<p>Öffnen sie das Kontext-Menü mit einerm Rechtsklick auf das Aampelsymbol und wählen sie Verbinden. </p>
<img  class="explainimg" src="verbinden.png">
<p>Nun erscheint ein Login-Fenster. Geben Sie die ihnen zur Verfügung gestellten <b>allgemienen</b> VPN-Angaben ein. Bestätigen Sie mit OK. </p>
<img  class="explainimg" src="vpnlogin.png">
<p>Die Ampel wechselt nach ein paar Sekunen auf Grün.</p>

<h2>4. Remotedesktop-Verbindung</h2>

<p>Laden sie die Konfigurationsdatei für die Remote-Desktop-Verbindung herunter: <a href="DWare_Bezirke_extern_windows.rdp" download>DWare_Bezirke_extern_windows.rdp</a></p>

<p>Öffnen sie diese Datei mit einem Doppelklick und melden Sie sich mit ihren <b>persönlichen</b> Login-Daten an. </p>

<img class="explainimg" src="rdplogin.png">

</div>
<div id="status" width="20%">
<?php
$fileName = "status.txt";
$myfile = fopen($fileName, "r");
echo (fread($myfile,filesize($fileName)));
fclose($myfile);

?>
</div>
<script>
function mailto(){     
var one = "support";
var two = "emk-schweiz";
var three = ".ch";
window.location.href= 'mailto:'+one+"@"+two+three +"&subject=VPN Zugang nicht moeglich&body=Geben Sie bitte zusaetzlich zum Problembeschrieb ihren Usernamen (Login) an.";}
</script>
</div>
</body>
</html>