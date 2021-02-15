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
    <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
	<link href='assets/css/style.css' rel='stylesheet'>
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
                        <div class='row'>
                                <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        if ($result->num_rows > 0) {
                                            echo 
                                            "
                                                <div class='col-md-6'>
                                                    <div class='mr-2'>
                                                        <div class='card' onclick='location.href=\"detail.php?id=" . $row['id'] . "\"'>
                                                            <img class='card-img-top' src=". $row['imgevent'] ." alt='Card image cap'>
                                                            <div class='card-body'>
                                                                <h5 class='card-title'>". $row['eventnaam'] ."</h5>
                                                                <p class='card-text'>". substr($row['beschrijving'], 0, 100) ."</p>
                                                            </div>
                                                            <div>
                                                                <button class='btn btn-outline-warning mb-2 mr-4 float-right'>Read More</button>
                                                            </div>
                                                            <div class='card-footer'>
                                                                <small class='text-muted'>". $row['begindatum'] ."</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                                        }
                                    }
                                ?>
                        </div>
                    </div>
                </div>
                <?php
                    include 'includes/footer.php';
                ?>
</body>

</html>