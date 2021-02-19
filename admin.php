<?php
include 'config/config.php';
include 'check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<!-- The Admin page show all the data in the database and allows you to edit it -->
<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <div class='container admin'>
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
                                        echo '<td>' . substr($user['password'], 0, 10)   . '</td>';
                                        echo '<td>' . $user['user']   . '</td>';
                                        echo '<td><a href="config/actions.php?del=' . $user['id'] . '" class="btn btn-sm btn-danger mr-1">Delete</a>';
                                        echo '<a href="update.php?upd=' . $user['id'] . '" class="btn btn-sm btn-warning">Update</a></td>';
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
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>E-mail</th>
                                    <th>Phonenummer</th>
                                    <th>Streetname</th>
                                    <th>Housenumber</th>
                                    <th>Postal code</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Price of selected tickets</th>
                                    <th>Amout of selected</th>
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
                                        echo '<td>' . $user['prijs']      . '</td>';
                                        echo '<td>' . $user['selectedtickets']      . '</td>';
                                        echo '<td><a href="config/action-bestel.php?del=' . $user['id'] . '" class="btn btn-sm btn-danger">Delete</a></td>';
                                        echo '<td><a href="updatebestel.php?upd=' . $user['id'] . '" class="btn btn-sm btn-warning">Update</a></td>';
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
                                    <th>Eventname</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Totaltickets</th>
                                    <th>Tickets</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Img of event</th>
                                    <th>Presentator</th>
                                    <th>Creator</th>
                                    <th>Name of place</th>
                                    <th>Street</th>
                                    <th>Housenumber</th>
                                    <th>Postal code</th>
                                    <th>City</th>
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
                                        echo '<td>' . $user['eventnaam']   . '</td>';
                                        echo '<td>' . $user['begindatum']      . '</td>';
                                        echo '<td>' . $user['einddatum']      . '</td>';
                                        echo '<td>' . $user['totaltickets']      . '</td>';
                                        echo '<td>' . $user['tickets']      . '</td>';
                                        echo '<td>€' . $user['prijs']       . '</td>';
                                        echo '<td "class="event-column">' . substr($user['beschrijving'], 0, 10) . '</td>';
                                        echo '<td>' . substr($user['imgevent'], 1, 10) . '</td>';
                                        echo '<td>' . $user['presentator']      . '</td>';
                                        echo '<td>' . $user['creator']      . '</td>';
                                        echo '<td>' . $user['naam']      . '</td>';
                                        echo '<td>' . $user['straat']       . '</td>';
                                        echo '<td>' . $user['huisnummer en tvg']      . '</td>';
                                        echo '<td>' . $user['postcode']      . '</td>';
                                        echo '<td>' . $user['plaats']      . '</td>';
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
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>