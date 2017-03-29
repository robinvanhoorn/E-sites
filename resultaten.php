<html>
	<head>
		<title>Resultaten</title>
		</head>
	<body>	
	
	<?php
session_start();	
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "it-challenge";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gegevens";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b> id: </b>" . $row["id"]. "<b> Voornaam: </b>" . $row["Voornaam"]. "<b> Achternaam: </b>" . $row["Achternaam"]. "<b> E-mailadres: </b>" . $row["Emailadres"]. "<b> Adres: </b>" . $row["Adres"]. "<b> Postcode: </b>" . $row["Postcode"]. "<b> Woonplaats: </b>" . $row["Woonplaats"]. "<b> Bedrijfsnaam: </b>" . $row["Bedrijfsnaam"]. "<br>". "<b> Allergiën/Diëten: </b>" . $row["Allergie"]. "<br>". "<b> Sessie 1: </b>" . $row["Sessie1"]. "<b> Sessie 2: </b>" . $row["Sessie2"]. "<b> Sessie 3: </b>" . $row["Sessie3"]. "<br>". "<br>". "<b> Voornaam Introducé: </b>" . $row["IntroducéVoornaam"]. "<b> Achternaam Introducé: </b>" . $row["IntroducéAchternaam"]. "<b> E-mailadres Introducé: </b>" . $row["IntroducéEmailadres"]. "<b> Adres Introducé: </b>" . $row["IntroducéAdres"]. "<b> Postcode Introducé: </b>" . $row["IntroducéPostcode"]. "<b> Woonplaats Introducé: </b>" . $row["IntroducéWoonplaats"]. "<b> Bedrijfsnaam Introducé: </b>" . $row["IntroducéBedrijfsnaam"]. "<br>". "<b> Allergiën/Diëten Introducé: </b>" . $row["IntroducéAllergie"]. "<br>". "<b> Sessie 1 Introducé: </b>" . $row["IntroducéSessie1"]. "<b> Sessie 2 Introducé: </b>" . $row["IntroducéSessie2"]. "<b> Sessie 3 Introducé: </b>" . $row["IntroducéSessie3"]. "<br>". "<br>". "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

session_unset();
session_destroy();
?>


</body>
</html>






