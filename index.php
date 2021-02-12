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
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $eventDetails = "SELECT * FROM eventhubdetail";
    $result = $con->query($eventDetails);

    ?>
    <?php
    include 'includes/navbar.php';
    ?>
                <div class="container">
                    <div class="card-group">
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    if ($result->num_rows > 0) {
                                        echo 
                                        "<div class='row'>
                                        <a href='detail.php?id=" . $row['id'] . "'>
                                        <div class='col-md-6'>
                                            <div class='mr-2'>
                                                <div class='card'>
                                                    <img class='card-img-top' src=". $row['imgevent'] ." alt='Card image cap'>
                                                <div class='card-body'>
                                                    <h5 class='card-title'>". $row['eventnaam'] ."</h5>
                                                    <p class='card-text'>". $row['beschrijving'] ."</p>
                                                </div>
                                                <div class='card-footer'>
                                                    <small class='text-muted'>". $row['begindatum'] ."</small>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>";
                                    }
                                }
                            ?>
                    </div>
                </div>
    <footer>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 :
            <a class="text-dark" href="https://mdbootstrap.com/">Eventhub.com</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>