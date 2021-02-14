<?php
include 'config/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member register</title>
    <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 col-lg-offset-2'>
                <div class='col-lg-12 col-lg-offset-2'>

                    <div class='table-responsive'>
                        <table class='table table-striped'>
                            <h3>User Data</h3>
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>E-mail</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>User</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $query = "SELECT * FROM `tbl_users`";
                                $result = mysqli_query($con, $query) or die('Cannot fetch data from database. ' . mysqli_error($con));
                                if (mysqli_num_rows($result) > 0) {
                                    while ($user = mysqli_fetch_assoc($result)) {
                                        echo '<tr>';
                                        echo '<td>' . $user['firstname']  . '</td>';
                                        echo '<td>' . $user['lastname']   . '</td>';
                                        echo '<td>' . $user['email']      . '</td>';
                                        echo '<td>' . $user['username']   . '</td>';
                                        echo '<td>' . $user['password']   . '</td>';
                                        echo '<td>' . $user['user']   . '</td>';
                                        echo '<td><a href="config/actions.php?del=' . $user['id'] . '" class="btn btn-sm btn-danger">Delete</a></td>';
                                        echo '<td><a href="update.php?upd=' . $user['id'] . '" class="btn btn-sm btn-warning">Update</a></td>';
                                        echo '</tr>';
                                    }
                                }
                                mysqli_free_result($result);
                                mysqli_close($con);



                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class='table-responsive'>
                        <h3>Bestelformulieren</h3>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Voornaam</th>
                                    <th>Achternaam</th>
                                    <th>E-mail</th>
                                    <th>Telefoonnummer</th>
                                    <th>Straatnaam</th>
                                    <th>huisnummer</th>
                                    <th>Postcode</th>
                                    <th>Plaats</th>
                                    <th>Land</th>
                                    <th>Kaartjes</th>
                                    <th>Eventname</th>
                                    <th>Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config/config.php';
                                $query = "SELECT * FROM `bestformulier`";
                                $result = mysqli_query($con, $query) or die('Cannot fetch data from database. ' . mysqli_error($con));
                                if (mysqli_num_rows($result) > 0) {
                                    while ($user = mysqli_fetch_assoc($result)) {
                                        echo '<tr>';
                                        echo '<td>' . $user['Voornaam']  . '</td>';
                                        echo '<td>' . $user['Achternaam']   . '</td>';
                                        echo '<td>' . $user['Email']      . '</td>';
                                        echo '<td>' . $user['Telefoonnummer']      . '</td>';
                                        echo '<td>' . $user['Straatnaam']      . '</td>';
                                        echo '<td>' . $user['Huisnummer']      . '</td>';
                                        echo '<td>' . $user['Postcode']      . '</td>';
                                        echo '<td>' . $user['Plaats']      . '</td>';
                                        echo '<td>' . $user['Land']      . '</td>';
                                        echo '<td>' . $user['Kaartjes']      . '</td>';
                                        echo '<td>' . $user['Eventname']      . '</td>';
                                        echo '<td>' . $user['id']      . '</td>';
                                        echo '<td><a href="config/action-bestel.php?del=' . $user['id'] . '" class="btn btn-sm btn-danger">Delete</a></td>';
                                        echo '<td><a href="update.php?upd=' . $user['id'] . '" class="btn btn-sm btn-warning">Update</a></td>';
                                        echo '</tr>';
                                    }
                                }
                                mysqli_free_result($result);
                                mysqli_close($con);



                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class='table-responsive'>
                        <h3>Events</h3>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>eventnaam</th>
                                    <th>begindatum</th>
                                    <th>locatie</th>
                                    <th>beschrijving</th>
                                    <th>tickets</th>
                                    <th>prijs</th>
                                    <th>imgevent</th>
                                    <th>begintijd</th>
                                    <th>eindtijd</th>
                                    <th>presentator</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config/config.php';
                                $query = "SELECT * FROM `eventhubdetail`";
                                $result = mysqli_query($con, $query) or die('Cannot fetch data from database. ' . mysqli_error($con));
                                if (mysqli_num_rows($result) > 0) {
                                    while ($user = mysqli_fetch_assoc($result)) {
                                        echo '<tr>';
                                        echo '<td>' . $user['id']  . '</td>';
                                        echo '<td>' . $user['eventnaam']   . '</td>';
                                        echo '<td>' . $user['begindatum']      . '</td>';
                                        echo '<td>' . $user['locatie']      . '</td>';
                                        echo '<td>' . $user['beschrijving']      . '</td>';
                                        echo '<td>' . $user['tickets']      . '€</td>';
                                        echo '<td>' . $user['prijs']       . '</td>';
                                        echo '<td>' . $user['imgevent']      . '</td>';
                                        echo '<td>' . $user['begintijd']      . '</td>';
                                        echo '<td>' . $user['eindtijd']      . '</td>';
                                        echo '<td>' . $user['presentator']      . '</td>';
                                        echo '<td><a href="config/action-event.php?del=' . $user['id'] . '" class="btn btn-sm btn-danger">Delete</a></td>';
                                        echo '<td><a href="updateEvent.php?upd=' . $user['id'] . '" class="btn btn-sm btn-warning">Update</a></td>';
                                        echo '</tr>';
                                    }
                                }
                                mysqli_free_result($result);
                                mysqli_close($con);



                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
</body>

</html>