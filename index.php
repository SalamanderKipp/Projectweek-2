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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>