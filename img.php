<?php
session_start();
// upploade data naar database en slaat img op in folder
require 'config/config.php';
$eventnaam = mysqli_real_escape_string($con, trim($_POST['eventnaam']));
$begindatum = mysqli_real_escape_string($con, trim($_POST['begindatum']));
$einddatum = mysqli_real_escape_string($con, trim($_POST['einddatum']));
$beschrijving = mysqli_real_escape_string($con, trim($_POST['beschrijving']));
$tickets  = mysqli_real_escape_string($con, trim($_POST['tickets']));
$prijs = mysqli_real_escape_string($con, trim($_POST['prijs']));
$imgevent = "media/img/" . $_FILES["fileToUpload"]["name"];
$nameimg = $_FILES["fileToUpload"]["name"];
$presentator  = mysqli_real_escape_string($con, trim($_POST['presentator']));
$totaltickets = $tickets;
$naam = mysqli_real_escape_string($con, trim($_POST['naam']));
$straat = mysqli_real_escape_string($con, trim($_POST['straat']));
$huisnummer = mysqli_real_escape_string($con, trim($_POST['huisnummer']));
$tvg = mysqli_real_escape_string($con, trim($_POST['tvg']));
$huisnummer = $huisnummer . $tvg;
$postcode = mysqli_real_escape_string($con, trim($_POST['postcode']));
$plaats = mysqli_real_escape_string($con, trim($_POST['plaats']));

$creator = $_SESSION['username'];

$query = "INSERT INTO `eventhubdetail` (`eventnaam`, `begindatum`, `einddatum`, `beschrijving`, `tickets`, `prijs`, `imgevent`, `presentator`, `totaltickets`, `creator`, `naam`, `straat`, `huisnummer en tvg`, `postcode`, `plaats`) VALUES ('$eventnaam', '$begindatum', '$einddatum', '$beschrijving', '$tickets','$prijs','$imgevent','$presentator', '$totaltickets','$creator', '$naam', '$straat', '$huisnummer', '$postcode', '$plaats')";

echo $query;

$result = mysqli_query($con, $query) or die('Cannot insert data into database. ' . mysqli_error($con));
if ($result) {
    echo 'Data inserted into database.';
    mysqli_free_result($result);
    header('Location: index.php');
}
