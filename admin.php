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
</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 col-lg-offset-2'>
                <div class='col-lg-12 col-lg-offset-2'>
                    <h3>User Data</h3>
                    <hr>
                    <div class='table-responsive'>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>E-mail</th>
                                    <th>Username</th>
                                    <th>Password</th>
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
                </div>
            </div>
        </div>
</body>
</html>