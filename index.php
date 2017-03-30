<!DOCTYPE html>
<html>
  <head>
    <title>Welkom! Eventplanner E-Sites</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="sessieOpties.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type='text/javascript' src='jquery.js'></script>
	<script type='text/javascript' src='script.js'></script>
	<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http:////cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/bootstrap.min.js'></script>
	
	<!--https://codemyui.com/pure-css-check-mark-slide-animation/ https://codepen.io/elmahdim/pen/hlmri-->
  </head>
<body>
<a href="Secretaresse.php"><img src="esiteslogo.png" id="logo"></a>
<div id="mainPage">
<div id="topPadding" class="innerColumn"></div>
<div id="firstTitle "class="title innerColumn"><p>Feest!</p></div>
<div id="firstText" class="text innerColumn">E-sites verleent al 16 jaar lang zijn diensten op het gebied van web - en app development, en dit mag gevierd worden! Hierbij bent u als relatie uitgenodigd om dit met ons te komen vieren op 9 april, om 09:30 op het E-sites terrein, te Breda.
Deze dag worden er drie blokken gevuld met presentaties, verzorgd door deskundigen op het gebied van content en web - en app development. Daarnaast zal er een lunch voor u worden verzorgd vandaar kan u aangeven wat u wilt eten en of u allergieën heeft.
U hoeft niet alleen te komen: het meenemen van een introducé is toegestaan, immers, hoe meer zielen hoe meer vreugd! Dit kan u in de checkbox onder deze tekst aangeven.
<br><div id="introducéCheckbox"><input type="checkbox" onclick="introducéFunction()" checked>Ik neem een introducé mee.</div></div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<div id="sessie1" class="sessieHeader sessieTitle">Sessie 1</div>
<div class="sessieOptions">
	<div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design | door: sjoerd dijkstra</h3>
                    <p>Deze jonge spreker zal het gaan hebben over hoe je met humor zelfs de donkerste dagen door kan komen. Met een knipoog, afgezaagde anekdotes en kromme quotes zal deze sessie in een zucht en een vloek voorbij gaan. 
</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session1Invite" value="Design"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session1Introducé" value="Design"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <i class="fa fa-anchor"></i>
                        <h3>php</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>php | door: jeroen teurlings</h3>
                    <p>Jeroen Teurlings is expert op het gebied van medical app development. Hij gaat in deze sessie vertellen over de medische applicaties die hij zelf heeft ontwikkeld en over de achterliggende filosofie.</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session1Invite" value="PHPDeveloper"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session1Introducé" value="PHPDeveloper"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>Ui Developer</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>UI | door: Dave Segeren</h3>
                    <p>Dave Segeren is expert op het gebied van web en app development. Hij gaat vertellen over de nieuwe toepassingen is deze sector en over de gedachtegang van meerdere concepten op het gebied van web en app development.
</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session1Invite" value="Developer"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session1Introducé" value="Developer"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
	</div>
<div id="sessie2" class="sessieHeader sessieTitle">Sessie 2</div>
<div class="sessieOptions">
	<div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design | Door: Sjoerd dijkstra</h3>
                    <p>Deze jonge spreker zal het gaan hebben over hoe je met humor zelfs de donkerste dagen door kan komen. Met een knipoog, afgezaagde anekdotes en kromme quotes zal deze sessie in een zucht en een vloek voorbij gaan. </p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session2Invite" value="Design"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session2Introducé" value="Design"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <i class="fa fa-anchor"></i>
                        <h3>php</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>php | door: jeroen teurlings</h3>
                    <p>Jeroen Teurlings is expert op het gebied van medical app development. Hij gaat in deze sessie vertellen over de medische applicaties die hij zelf heeft ontwikkeld en over de achterliggende filosofie.</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session2Invite" value="PHPDeveloper"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session2Introducé" value="PHPDeveloper"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>Ui Developer</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>UI | door: Dave Segeren</h3>
                    <p>Dave Segeren is expert op het gebied van web en app development. Hij gaat vertellen over de nieuwe toepassingen is deze sector en over de gedachtegang van meerdere concepten op het gebied van web en app development.
</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session2Invite" value="Developer"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session2Introducé" value="Developer"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
	</div>
<div id="sessie3" class="sessieHeader sessieTitle">Sessie 3</div>
<div class="sessieOptions">
	<div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon yellow">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>design</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>design | door: Sjoerd Dijkstra</h3>
                    <p>Deze jonge spreker zal het gaan hebben over hoe je met humor zelfs de donkerste dagen door kan komen. Met een knipoog, afgezaagde anekdotes en kromme quotes zal deze sessie in een zucht en een vloek voorbij gaan. </p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session3Invite" value="Design"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session3Introducé" value="Design"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="service-box">
                <div class="service-icon orange">
                    <div class="front-content">
                        <i class="fa fa-anchor"></i>
                        <h3>php</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>php | door: jeroen teurlings</h3>
                    <p>Jeroen Teurlings is expert op het gebied van medical app development. Hij gaat in deze sessie vertellen over de medische applicaties die hij zelf heeft ontwikkeld en over de achterliggende filosofie.</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session3Invite" value="PHPDeveloper"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session3Introducé" value="PHPDeveloper"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="service-box ">
                <div class="service-icon red">
                    <div class="front-content">
                        <i class="fa fa-trophy"></i>
                        <h3>UI Developer</h3>
                    </div>
                </div>
                <div class="service-content">
                    <h3>UI | door: Dave Segeren</h3>
                    <p>Dave Segeren is expert op het gebied van web en app development. Hij gaat vertellen over de nieuwe toepassingen is deze sector en over de gedachtegang van meerdere concepten op het gebied van web en app development.
</p>
					<div class="sessionChoiceBox">
					<input type="radio" name="session3Invite" value="Developer"> Ik wil deze sessie bijwonen.<br>
					<div class="introducé"><input type="radio" name="session3Introducé" value="Developer"> Mijn introducé wil deze sessie bijwonen.</div>
					</div>
				</div>
            </div>
        </div>
	</div>
<div id="inschrijven">
		<div id="personalNaam">PERSOONLIJKE DATA</div>
		<label>
			<input type="text" name="voornaam" required />
			<div class="label-text">Voornaam*</div>
		</label>
		<label class="formRightColumn">
			<input type="text" name="achternaam" required/>
			<div class="label-text" >Achternaam*</div>
		</label>
		<div></div>
		<label>
			<input type="text" name="emailadres" required/>
			<div class="label-text" >E-mailadres*</div>
		</label>
		<label>
			<input type="text" name="adres"/>
			<div class="label-text" >Adres</div>
		</label>
		<div></div>
		<label>
			<input type="text" name="postcode"/>
			<div class="label-text" >Postcode</div>
		</label>
		<label>
			<input type="text" name="woonplaats"/>
			<div class="label-text" >Woonplaats</div>
		</label>
		<div></div>
		<label>
			<input type="text" name="bedrijfsnaam"/>
			<div class="label-text" >Bedrijfsnaam</div>
		</label>
		<label>
			<input type="text" name="allergie"/>
			<div class="label-text" >Allergiën/dieten</div>
		</label>
	<div class="introducé">
	<div id="introducéNaam">DATA INTRODUCÉ</div>
		<label>
			<input type="text" class="introducéField"  name="introvoornaam"/>
			<div class="label-text">Voornaam*</div>
		</label>
		<label class="formRightColumn">
			<input type="text" class="introducéField"  name="introachternaam"/>
			<div class="label-text">Achternaam*</div>
		</label>
		<div></div>
		<label>
			<input type="text" class="introducéField"  name="introemailadres"/>
			<div class="label-text">E-mailadres*</div>
		</label>
		<label>
			<input type="text" class="introducéField" name="introadres" />
			<div class="label-text">Adres</div>
		</label>
		<div></div>
		<label>
			<input type="text" class="introducéField" name="intropostcode" />
			<div class="label-text">Postcode</div>
		</label>
		<label>
			<input type="text" class="introducéField" name="introwoonplaats" />
			<div class="label-text">Woonplaats</div>
		</label>
		<div></div>
		<label>
			<input type="text" class="introducéField" name="introbedrijfsnaam" />
			<div class="label-text">Bedrijfsnaam</div>
		</label>
		<label>
			<input type="text" class="introducéField" name="introallergie" />
			<div class="label-text">Allergiën/dieten</div>
		</label>
	</div>
	<div>
		<input type="submit" class="sendButton" value="verzenden"></input>
	</div>
	
</form>
</div>
</div>

<a href="#">
<div id="home" class="whiteSpace">
<div class="lineText" id="lineText1">E-sites</div>
<div class="line" id="line1"></div>
<div class="lineText" id="lineText2">Groot Feest! - April 9</div>
<div class="line" id="line2"></div>
<div class="lineText" id="lineText3"><a href="#"id="homeScreenContinue">Klik hier om door te gaan</a></div>
<div class="line" id="line3"></div>
</div></a>
<div id="hoverScreen"></div>

<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Gelukt!</h4>
				</div>
				<div class="modal-body">
					<p>Uw inschrijving is binnengekomen en wordt door ons secretariaat verwerkt!
Wij hopen u te zien op deze memorabele en feest volle dag. Tot dan!</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


<?php
$link = mysqli_connect("localhost", "root", "root", "it-challenge");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$voornaam = mysqli_real_escape_string($link, $_REQUEST['voornaam']);
$achternaam = mysqli_real_escape_string($link, $_REQUEST['achternaam']);
$emailadres = mysqli_real_escape_string($link, $_REQUEST['emailadres']);
$adres = mysqli_real_escape_string($link, $_REQUEST['adres']);
$postcode = mysqli_real_escape_string($link, $_REQUEST['postcode']);
$woonplaats = mysqli_real_escape_string($link, $_REQUEST['woonplaats']);
$bedrijfsnaam = mysqli_real_escape_string($link, $_REQUEST['bedrijfsnaam']);
$allergie = mysqli_real_escape_string($link, $_REQUEST['allergie']);
$sessie1 = mysqli_real_escape_string($link, $_REQUEST['session1Invite']);
$sessie2 = mysqli_real_escape_string($link, $_REQUEST['session2Invite']);
$sessie3 = mysqli_real_escape_string($link, $_REQUEST['session3Invite']);


$introvoornaam = mysqli_real_escape_string($link, $_REQUEST['introvoornaam']);
$introachternaam = mysqli_real_escape_string($link, $_REQUEST['introachternaam']);
$introemailadres = mysqli_real_escape_string($link, $_REQUEST['introemailadres']);
$introadres = mysqli_real_escape_string($link, $_REQUEST['introadres']);
$intropostcode = mysqli_real_escape_string($link, $_REQUEST['intropostcode']);
$introwoonplaats = mysqli_real_escape_string($link, $_REQUEST['introwoonplaats']);
$introbedrijfsnaam = mysqli_real_escape_string($link, $_REQUEST['introbedrijfsnaam']);
$introallergie = mysqli_real_escape_string($link, $_REQUEST['introallergie']);
$introsessie1 = mysqli_real_escape_string($link, $_REQUEST['session1Introducé']);
$introsessie2 = mysqli_real_escape_string($link, $_REQUEST['session2Introducé']);
$introsessie3 = mysqli_real_escape_string($link, $_REQUEST['session3Introducé']);

 
if(empty($achternaam)) {


}
else { 
$sql = "INSERT INTO gegevens (Voornaam, Achternaam, Emailadres, Adres, Postcode, Woonplaats, Bedrijfsnaam, Allergie, Sessie1, Sessie2, Sessie3, IntroducéVoornaam, IntroducéAchternaam, IntroducéEmailadres, IntroducéAdres, IntroducéPostcode, IntroducéWoonplaats, IntroducéBedrijfsnaam, IntroducéAllergie, IntroducéSessie1, IntroducéSessie2, IntroducéSessie3) VALUES ('$voornaam', '$achternaam', '$emailadres', '$adres', '$postcode', '$woonplaats', '$bedrijfsnaam', '$allergie', '$sessie1', '$sessie2', '$sessie3', '$introvoornaam', '$introachternaam', '$introemailadres', '$introadres', '$intropostcode', '$introwoonplaats', '$introbedrijfsnaam', '$introallergie', '$introsessie1', '$introsessie2', '$introsessie3')";
if(mysqli_query($link, $sql)){
      // VOER HIER VERWIJZING IN
	  echo
	  "<script type='text/javascript'>
	  $(document).ready(function(){
		 $('#myModal').modal('show'); 
	  }); </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 
mysqli_close($link);
?>

