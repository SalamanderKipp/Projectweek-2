<?php
// Plaats hier de code die zorgt voor een verbinding met de database
require 'config.php';
// Plaats hier de code die checkt of het sign-up formulier verzonden werd (submit). Nieuwe gebruiker aanmaken dus!
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
		header('Location:../index.php');
	}
}

// Check if update-form is submitted
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
	$Kaartjes = $_POST['Kaartjes'];

	$query  = "UPDATE `bestformulier` SET Voornaam='$Voornaam', Achternaam='$Achternaam', Email='$Email', Telefoonnummer='$Telefoonnummer', Straatnaam='$Straatnaam', Huisnummer='$Huisnummer', Postcode='$Postcode', Plaats='$Plaats', Land='$Land', Kaartjes='$Kaartjes' WHERE id=$id";
	$result = mysqli_query($con, $query) or die('Cannot update data in database. ' . mysqli_error($con));
	$user   = mysqli_fetch_assoc($result);
	if ($result) header('Location: ../admin.php');
}
// Check if DELETE is requested
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

