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
    // Keep track of validated values
    $valid = array('eventnaam' => false, 'begindatum' => false, 'locatie' => false, 'beschrijving' => false, 'priceofticket' => false, 'imgevent' => false, 'begintijd' => false, 'eindtijd');
    // Validate firstname
    if (!empty($firstname)) {
        if (strlen($firstname) >= 2 && strlen($firstname) <= 40) {
            if (!preg_match('/[^a-zA-Z\s]/', $firstname)) {
                $valid['firstname'] = true;
                echo 'Firstname is OK! <br/>';
            } else {
                echo 'Firstname can contain only letters!<br/>';
            }
        } else {
            echo 'Firstname must be between 2 and 40 characters long!<br/>';
        }
    } else {
        echo 'Firstname cannot be blank!<br/>';
    }
    // Validate lastname
    if (!empty($lastname)) {
        if (strlen($lastname) >= 2 && strlen($lastname) <= 40) {
            if (!preg_match('/[^a-zA-Z\s]/', $lastname)) {
                $valid['lastname'] = true;
                echo 'Lastname is OK! <br/>';
            } else {
                echo 'Lastname can contain only letters!<br/>';
            }
        } else {
            echo 'Lastname must be between 2 and 40 characters long!<br/>';
        }
    } else {
        echo 'Lastname cannot be blank!<br/>';
    }
    // Validate email
    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $valid['email'] = true;
            echo 'E-mail is OK!<br/>';
        } else {
            echo 'E-mail is invalid!<br/>';
        }
    } else {
        echo 'E-mail cannot be blank!<br/>';
    }
    // Validate username
    if (!empty($username)) {
        if (strlen($username) >= 2 && strlen($username) <= 16) {
            if (!preg_match('/[^a-zA-Z\d_.]/', $username)) {
                $valid['username'] = true;
                echo 'Username is OK! <br/>';
            } else {
                echo 'Username can contain only letters!<br/>';
            }
        } else {
            echo 'Username must be between 2 and 16 characters long!<br/>';
        }
    } else {
        echo 'Username cannot be blank!<br/>';
    }
    // Validate password
    if (!empty($password)) {
        if (strlen($password) >= 5 && strlen($password) <= 32) {
            $valid['password'] = true;
            $password = password_hash($password, PASSWORD_BCRYPT, ["cost" => 8]);
            echo 'Password is OK!<br/>';
        } else {
            echo 'Password must be between 5 and 32 characters!<br/>';
        }
    } else {
        echo 'Password cannot be blank!<br/>';
    }
}
