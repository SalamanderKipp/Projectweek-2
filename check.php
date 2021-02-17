<?php
session_start();
if ($_SESSION['userType'] != "admin") {
    header("location: login.php");
}