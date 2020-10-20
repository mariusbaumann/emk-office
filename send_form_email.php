<?php
 
if(isset($_POST['email'])) {
 
    $email_to = "it@emk-schweiz.ch";
 
    $email_subject = "Support Ticket";
 
// validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['district']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['problem']) ||
		
        !isset($_POST['comments'])) {
 
        died('&Uumlberpr&uumlfen Sie bitte alle Angaben auf Soderzeichen.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $district = $_POST['district']; // required
 
    $email_from = $_POST['email']; // required
	
	$problem = $_POST['problem']; // required
 
    $comments = $_POST['comments']; // required
 
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'Die Angegebene Mailadresse hat ein ung&uumlltiges Format.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-äöüÄÖÜéèàÉÀÈ]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'Ihr Name fehlt oder beinhaltet ung&uumlltige Zeichen.<br />';
 
  }
 
  if(!preg_match($string_exp,$district)) {
 
    $error_message .= 'Ihr Bezirk fehlt oder beinhaltet ung&uumlltige Zeichen.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'Bitte beschreiben sie das  Problem im Kommentarfeld<br />';
 
  }

	$result = json_decode(
			file_get_contents(
			"https://www.google.com/recaptcha/api/siteverify?secret=6LdT1QETAAAAAFhfSJEp-1YE6wGGJdOGd4AWRYRi&response="
			.$_POST['g-recaptcha-response']
			."&remoteip="
			.$_SERVER['REMOTE_ADDR'])
			, true);

	if ($result["success"] != true) {
		$error_message .= 'Bitte haken sie das Feld unten in der Mitte an (Ich bin kein Roboter).';
	}
	
  if(strlen($error_message) > 0) {

    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Bezirk: ".clean_string($district)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
	
    $email_message .= "Problem: ".clean_string($problem)."\n";
  
    $email_message .= "Kommentar: ".clean_string($comments)."\n";
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 <header>
 <meta http-equiv="refresh" content="7; url=http://www.emk-office.ch" />
 <link rel="stylesheet" type="text/css" href="resources/theme.css">
 </header>
 <body>
 
<p>Vielen Dank f&uumlr ihre Nachricht, wir werden uns in k&uumlrze bei Ihnen melden.
<br><br>
Sie werden gleich wieder <a class="back" href="www.emk-office.ch">zur&uumlck</a> geleitet.
</p>
</body>
<?php
 
}
     function died($error) {
 
        // your error code can go here
		$errorHTML = "";
		$errorHTML = "<meta http-equiv=\"refresh\" content=\"0; url='http://www.emk-office.ch/fehler.php?";
		
		$errorHTML .= "name="; 
		$errorHTML .= $_POST['name'];
		
		$errorHTML .= "&district="; 
		$errorHTML .= $_POST['district'];
		
		$errorHTML .= "&email="; 
		$errorHTML .= urlencode($_POST['email']);
		
		$errorHTML .= "&comments="; 
		$errorHTML .= urlencode($_POST['comments']);
		
		$errorHTML .= "&error=" .urlencode("<b>Bitte behandeln Sie folgende Probleme: </b><br/>") .urlencode($error); 
		
		$errorHTML .= "\" />";
        echo $errorHTML;
 
        die();
 
    }
?>