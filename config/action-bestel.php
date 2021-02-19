<?php
// Conact to database
require 'config.php';
// Code die checkt of register formulier verstuurd word
if (isset($_POST['submit'])) {
	// Get POST values
	$Voornaam = mysqli_real_escape_string($con, trim($_POST['Voornaam']));
	$Achternaam = mysqli_real_escape_string($con, trim($_POST['Achternaam']));
	$Email = mysqli_real_escape_string($con, trim($_POST['Email']));
	$Telefoonnummer = mysqli_real_escape_string($con, trim($_POST['Telefoonnummer']));
	$Straatnaam  = mysqli_real_escape_string($con, trim($_POST['Straatnaam']));
	$Huisnummer = mysqli_real_escape_string($con, trim($_POST['Huisnummer']));
	$Postcode = mysqli_real_escape_string($con, trim($_POST['Postcode']));
	$Plaats = mysqli_real_escape_string($con, trim($_POST['Plaats']));
	$Land = mysqli_real_escape_string($con, trim($_POST['Land']));
	$priceOfTickets = mysqli_real_escape_string($con, trim($_POST['priceOfTickets']));
	$ticketsSelected = mysqli_real_escape_string($con, trim($_POST['ticketsSelected']));


	$query = "INSERT INTO `bestformulier` (`Voornaam`, `Achternaam`, `Email`, `Telefoonnummer`, `Straatnaam`, `Huisnummer`, `Postcode`, `Plaats`, `Land`, `prijs`, `selectedtickets`) VALUES ('$Voornaam','$Achternaam','$Email','$Telefoonnummer', '$Straatnaam','$Huisnummer','$Postcode','$Plaats','$Land','$priceOfTickets','$ticketsSelected')";
	$result = mysqli_query($con, $query) or die('Cannot insert data into database. ' . mysqli_error($con));
	if ($result) {
		$id = $_POST['id'];
		$query  = "UPDATE `eventhubdetail` SET tickets = tickets - $ticketsSelected WHERE id=$id";
		$con->query($query) or die('Cannot insert data into database. ' . mysqli_error($con));
		echo 'Data inserted into database.';
		mysqli_free_result($result);
		// Als de bestelling geslaagd dan gaan je naar de thanks page
		header('Location:../thanks.php');
	}
}

// Update een bestelformulier in admin.php
if (isset($_POST['btnupdate'])) {
	$id = $_GET['id'];
	$Voornaam = $_POST['Voornaam'];
	$Achternaam = $_POST['Achternaam'];
	$Email = $_POST['Email'];
	$Telefoonnummer = $_POST['Telefoonnummer'];
	$Straatnaam = $_POST['Straatnaam'];
	$Huisnummer = $_POST['Huisnummer'];
	$Postcode = $_POST['Postcode'];
	$Plaats = $_POST['Plaats'];
	$Land = $_POST['Land'];
	$selectedtickets = $_POST['selectedtickets'];

	$query  = "UPDATE `bestformulier` SET Voornaam='$Voornaam', Achternaam='$Achternaam', Email='$Email', Telefoonnummer='$Telefoonnummer', Straatnaam='$Straatnaam', Huisnummer='$Huisnummer', Postcode='$Postcode', Plaats='$Plaats', Land='$Land', selectedtickets='$selectedtickets' WHERE id=$id";
	$result = mysqli_query($con, $query) or die('Cannot update data in database. ' . mysqli_error($con));
	$user   = mysqli_fetch_assoc($result);
	if ($result) header('Location: ../admin.php');
}
// Delete een bestelformulier uit database
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$query = "DELETE FROM `bestformulier` WHERE id=$id";
	$result = mysqli_query($con, $query) or die('Cannot delete data from database. ' . mysqli_error($con));
	if ($result) {
		echo 'Data deleted from database.';
		mysqli_free_result($result);
		header('Location: ../admin.php');
	}
}
