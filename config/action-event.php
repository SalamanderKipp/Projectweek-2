<?php
// Plaats hier de code die zorgt voor een verbinding met de database
require 'config.php';
// Plaats hier de code die checkt of het sign-up formulier verzonden werd (submit). Nieuwe gebruiker aanmaken dus!
if (isset($_POST['submit'])) {
    // Get POST values
}

// Check if update-form is submitted
if (isset($_POST['btnupdate'])) {
    $id = $_GET['id'];
    $eventnaam = $_POST['eventnaam'];
    $query  = "UPDATE `eventhubdetail` SET eventnaam='$eventnaam' WHERE id=$id";
    $result = mysqli_query($con, $query) or die('Cannot update data in database. ' . mysqli_error($con));
    $user   = mysqli_fetch_assoc($result);
    if ($result) header('Location:../admin.php');
}

// Check if DELETE is requested
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = "DELETE FROM `eventhubdetail` WHERE id=$id";
    $result = mysqli_query($con, $query) or die('Cannot delete data from database. ' . mysqli_error($con));
    if ($result) {
        echo 'Data deleted from database.';
        mysqli_free_result($result);
        header('Location:../admin.php');
    }
}
