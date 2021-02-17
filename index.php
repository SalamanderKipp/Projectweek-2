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
                                            $dateStart= date_format(date_create($row['begindatum']), "d M H:i");
                                            $dateEnd= date_format(date_create($row['einddatum']), "d M H:i");
                                            $datum= "";
                                            if ($row['einddatum'] == '0000-00-00 00:00:00') {
                                                $datum= $dateStart;
                                            }else {
                                                $datum= $dateStart ." - ". $dateEnd;
                                            }


                                            $tickets = $row['tickets'];
                                            $totaltickets = $row['totaltickets'];
                                            $carddanger = "";
                                            $locationonclick = "' onclick='location.href=\"detail.php?id=" . $row['id'] . "\"'";
                                            if($tickets == 0) {
                                                $carddanger = "carddanger";
                                                $locationonclick = "";
                                            }
                                            else if($tickets <= ($totaltickets * 0.1)) {
                                                $carddanger = "cardwarning";
                                            }
                                            $readmore = '';
                                            $buttonColor = "success";
                                            if($tickets == 0) {
                                                $buttonColor = "danger";
                                                $locationonclick = "";
                                                $readmore = "readmore";
                                            }else if($tickets <= ($totaltickets * 0.1)) {
                                                $buttonColor = "warning";
                                            }
                                            echo 
                                            "
                                                <div class='col-md-6 '>
                                                    <div class='mr-2'>
                                                        <div class='card " . $carddanger . " ' " . $locationonclick . ">
                                                            <img class='card-img-top' src=". $row['imgevent'] ." alt='Card image cap'>
                                                            <div class='card-body'>
                                                                <h5 class='text-center'>". $row['eventnaam'] ."</h5>
                                                                <p class='card-text'> <i class='fas fa-map-marker-alt'></i> " . $row['plaats'] . ' ' . $row['straat'] . "<br><i class='fas fa-user'></i> " . $row['presentator'] . "<br> <i class='fas fa-calendar-alt'></i> " . $datum . "</p>
                                                            </div>
                                                            <div>
                                                                <button class='btn btn-outline-$buttonColor mb-2 mr-4 float-right $readmore'><b>Read More</b></button>
                                                            </div>
                                                            <div class='card-footer'>
                                                                <small class='text-muted float-right'>Tickets available ". $row['tickets'] ."</small>
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

             <script src="https://kit.fontawesome.com/41c29a8a8f.js" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>