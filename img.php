<?php
session_start();
require 'config/config.php';
$eventnaam = mysqli_real_escape_string($con, trim($_POST['eventnaam']));
$begindatum = mysqli_real_escape_string($con, trim($_POST['begindatum']));
$locatie = mysqli_real_escape_string($con, trim($_POST['locatie']));
$beschrijving = mysqli_real_escape_string($con, trim($_POST['beschrijving']));
$tickets  = mysqli_real_escape_string($con, trim($_POST['tickets']));
$priceofticket = mysqli_real_escape_string($con, trim($_POST['priceofticket']));
// $imgevent = mysqli_real_escape_string($con, trim($_POST['imgevent']));
$imgevent = "media/img/" . $_FILES["fileToUpload"]["name"];
$nameimg = $_FILES["fileToUpload"]["name"];
$begintijd = mysqli_real_escape_string($con, trim($_POST['begintijd']));
$eindtijd = mysqli_real_escape_string($con, trim($_POST['eindtijd']));
$presentator  = mysqli_real_escape_string($con, trim($_POST['presentator']));
$totaltickets = $tickets;

$creator = $_SESSION['username'];

// Get current datetime
$dt = new DateTime(null, new DateTimeZone('Europe/Amsterdam'));
$datetime = $dt->format('d-m-Y H:i:s');

$query = "INSERT INTO `eventhubdetail` (`eventnaam`, `begindatum`, `locatie`, `beschrijving`, `tickets`, `prijs`, `imgevent`, `begintijd`, `eindtijd`, `presentator`, `totaltickets`, `creator`) VALUES ('$eventnaam','$begindatum','$locatie','$beschrijving', '$tickets','$priceofticket','$imgevent','$begintijd','$eindtijd','$presentator', '$totaltickets','$creator')";
$result = mysqli_query($con, $query) or die('Cannot insert data into database. ' . mysqli_error($con));
if ($result) {
    echo 'Data inserted into database.';
    mysqli_free_result($result);
    header('Location: index.php');
}