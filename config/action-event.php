<?php
// Plaats hier de code die zorgt voor een verbinding met de database
require 'config-event.php';
// Plaats hier de code die checkt of het sign-up formulier verzonden werd (submit). Nieuwe gebruiker aanmaken dus!
if (isset($_POST['submit'])) {
    // Get POST values
    $eventnaam = mysqli_real_escape_string($con, trim($_POST['eventnaam']));
    $begindatum = mysqli_real_escape_string($con, trim($_POST['begindatum']));
    $locatie = mysqli_real_escape_string($con, trim($_POST['locatie']));
    $beschrijving = mysqli_real_escape_string($con, trim($_POST['beschrijving']));
    $tickets  = mysqli_real_escape_string($con, trim($_POST['tickets']));
    $priceofticket = mysqli_real_escape_string($con, trim($_POST['priceofticket']));
    $imgevent = mysqli_real_escape_string($con, trim($_POST['imgevent']));
    $begintijd = mysqli_real_escape_string($con, trim($_POST['begintijd']));
    $eindtijd = mysqli_real_escape_string($con, trim($_POST['eindtijd']));
    $presentator  = mysqli_real_escape_string($con, trim($_POST['presentator']));
    // Get current datetime
    $dt = new DateTime(null, new DateTimeZone('Europe/Amsterdam'));
    $datetime = $dt->format('d-m-Y H:i:s');
   
    $query = "INSERT INTO `eventhubdetail` (`eventnaam`, `begindatum`, `locatie`, `beschrijving`, `tickets`, `prijs`, `img`, `begintijd`, `eindtijd`, `presentator`) VALUES ('$eventnaam','$begindatum','$locatie','$beschrijving', '$tickets','$priceofticket','$imgevent','$begintijd','$eindtijd','$presentator')";
	$result = mysqli_query($con, $query) or die('Cannot insert data into database. ' . mysqli_error($con));
	if ($result) {
		echo 'Data inserted into database.';
		mysqli_free_result($result);
		header('Location:../admin.php');
	}
}

