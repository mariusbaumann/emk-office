<!DOCTYPE html>
<html lang="de-DE">
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="resources/theme.css">
<title>Fehlererfassung:</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div class="header">
<span><a href="http://www.emk-office.ch" style="margin:0;""><img class="logo" src='http://www.emk-schweiz.ch/fileadmin/template/main/images/logo.gif' /></a></span>
<span align="right"><img class="logo" src='/resources/logo-zahlstelle.jpg' /></span>
</div>
<div class="errorreport">
<p class="T1">Problembericht:</p>
<div class="errormessage">
<label  id="notification"><?php echo urldecode($_GET['error']); ?></label>
</div>
<div class="error">
<form name="contactform" method="post" action="send_form_email.php">
 
<table>
 
<tr>
 <td class="c1">
  <label for="name">Vor-/Nachname:</label>
 </td>
 <td colspan="2">
  <input class="field" type="text" name="name" maxlength="50" size="20" value='<?php echo ($_GET["name"]);?>'>
 </td>
</tr>

<tr>
 <td class="c1">
  <label for="district">Bezirk:</label>
 </td>
 <td colspan="2">
  <input class="field" type="text" name="district" maxlength="50" size="20" value='<?php echo ($_GET["district"]);?>'>
 </td>
</tr>
 
<tr>
 <td class="c1">
  <label for="email">Email Adresse:</label>
 </td>
 <td colspan="2">
  <input class="field" type="text" name="email" maxlength="80" size="20" value='<?php echo urldecode($_GET["email"]);?>'>
 </td>
</tr>

<tr>
 <td class="c1">
  <label for="problem">Problemkategorie:</label>
 </td>
 <td colspan="2">
	<select name="problem" >
		<option>Verbindung mit VPN</option>
		<option>Verbindung mit DWare</option>
		<option>Andere</option>
	</select>
 </td>
</tr>
 
<tr>
 <td class="c1">
  <label for="comments">Problembericht:</label>
 </td>
 <td colspan="2">
  <textarea class="field" name="comments" maxlength="1000" cols="20" rows="10"><?php echo urldecode($_GET["comments"]);?></textarea>
 </td>
</tr>

<tr>
 <td >
 <a class="home" href="http://www.emk-office.ch/">Zurück</a>
 </td>
	<td align="left" class="c1">
		<div class="g-recaptcha" data-sitekey="6LdT1QETAAAAAGai3hb9g2_IcI8waHpqLqBP3Axp"></div>
		<noscript>
			<div style="width: 302px; height: 422px;">
				<div style="width: 302px; height: 422px; position: relative;">
					<div style="width: 302px; height: 422px; position: absolute;">
						<iframe src="https://www.google.com/recaptcha/api/fallback?k=your_site_key"
							frameborder="0" scrolling="no"
							style="width: 302px; height:422px; border-style: none;">
						</iframe>
					</div>
					<div style="width: 300px; height: 60px; border-style: none;
					  bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
					  background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
						<textarea id="g-recaptcha-response" name="g-recaptcha-response"
							class="g-recaptcha-response"
							style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
							 margin: 10px 25px; padding: 0px; resize: none;" >
						</textarea>
					</div>
				</div>
			</div>
		</noscript>
	</td>
	<td align="right">
		<input class="button" type="submit" value="Abschicken">	
	</td>
</tr>
</table>
</form>
 </div>
</div>
</body>