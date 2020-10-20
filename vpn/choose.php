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
<p class="T1">Anleitung VPN-Verbindung</p>
<div class="align">

<h3><a>Ich bin Mitarbeiter der zentralen Dienste</a></h3>
<h3><a>Ich bin Kassier eines Bezirks</a></h3>


</div>
<div id="status" width="20%">
<?php

/*
$fileName = "status.txt";
$myfile = fopen($fileName, "r");
echo (fread($myfile,filesize($fileName)));
fclose($myfile);
*/
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