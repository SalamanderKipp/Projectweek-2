<?php
session_start();
if ($_SESSION['userType'] != "admin" && $_SESSION['userType'] != "member") {
    header("location: index.php");
}

if($_SERVER['REQUEST_URI'] == "/Projectweek-2/admin.php") {
    if ($_SESSION['userType'] != "admin") {
        header("Location: index.php");
    }
}