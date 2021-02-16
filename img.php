<?php
session_start();
require 'config/config.php';
$eventnaam = mysqli_real_escape_string($con, trim($_POST['eventnaam']));
$begindatum = mysqli_real_escape_string($con, trim($_POST['begindatum']));
$einddatum = mysqli_real_escape_string($con, trim($_POST['einddatum']));
$locatie = mysqli_real_escape_string($con, trim($_POST['locatie']));
$beschrijving = mysqli_real_escape_string($con, trim($_POST['beschrijving']));
$tickets  = mysqli_real_escape_string($con, trim($_POST['tickets']));
$priceofticket = mysqli_real_escape_string($con, trim($_POST['priceofticket']));
$imgevent = "media/img/" . $_FILES["fileToUpload"]["name"];
$nameimg = $_FILES["fileToUpload"]["name"];
$presentator  = mysqli_real_escape_string($con, trim($_POST['presentator']));
$totaltickets = $tickets;

$creator = $_SESSION['username'];

$query = "INSERT INTO `eventhubdetail` (`eventnaam`, `begindatum`, `einddatum`, `locatie`, `beschrijving`, `tickets`, `prijs`, `imgevent`,  `presentator`, `totaltickets`, `creator`) VALUES ('$eventnaam','$begindatum','$einddatum','$locatie','$beschrijving', '$tickets','$priceofticket','$imgevent','$presentator', '$totaltickets','$creator')";
$result = mysqli_query($con, $query) or die('Cannot insert data into database. ' . mysqli_error($con));
if ($result) {
    echo 'Data inserted into database.';
    mysqli_free_result($result);
    header('Location: index.php');
}