<?php
// Plaats hier de code die zorgt voor een verbinding met de database
require 'config-bestel.php';
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
    $Kaartjes  = mysqli_real_escape_string($con, trim($_POST['Kaartjes']));

    $query = "INSERT INTO `bestformulier` (`Voornaam`, `Achternaam`, `Email`, `Telefoonnummer`, `Straatnaam`, `Huisnummer`, `Postcode`, `Plaats`, `Land`, `Kaartjes`) VALUES ('$Voornaam','$Achternaam','$Email','$Telefoonnummer', '$Straatnaam','$Huisnummer','$Postcode','$Plaats','$Land','$Kaartjes')";
	$result = mysqli_query($con, $query) or die('Cannot insert data into database. ' . mysqli_error($con));
	if ($result) {
		echo 'Data inserted into database.';
		mysqli_free_result($result);
		header('Location:../index.php');
	}
}

// Check if update-form is submitted
if (isset($_POST['btnupdate'])) {
	$id = $_GET['id'];
	$firstname = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$email     = $_POST['email'];
	$username  = $_POST['username'];
	$password  = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 8]);
	$query  = "UPDATE `bestformulier` SET firstname='$firstname', lastname='$lastname', email='$email', username='$username', password='$password' WHERE id=$id";
	$result = mysqli_query($con, $query) or die('Cannot update data in database. ' . mysqli_error($con));
	$user   = mysqli_fetch_assoc($result);
	if ($result) header('Location:../admin.php');
}
// Check if DELETE is requested
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$query = "DELETE FROM `bestformulier` WHERE id=$id";
	$result = mysqli_query($con, $query) or die('Cannot delete data from database. ' . mysqli_error($con));
	if ($result) {
		echo 'Data deleted from database.';
		mysqli_free_result($result);
		header('Location:../admin.php');
	}
}

