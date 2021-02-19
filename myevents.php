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
    <title>My events</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='assets/css/style.css' rel='stylesheet'>
</head>
<!-- The Myevent page allows event creators to edit their own events -->
<body>
    <?php
    include 'includes/navbar.php';
    ?>
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
                    <th>Name of place</th>
                    <th>Street</th>
                    <th>House number</th>
                    <th>Postal code</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config/config.php';
                $username = $_SESSION['username'];
                $query = "SELECT * FROM `eventhubdetail` WHERE creator = '$username'";
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
                        echo '<td>' . substr($user['imgevent'], 10) . '</td>';
                        echo '<td>' . $user['presentator']      . '</td>';
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
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>