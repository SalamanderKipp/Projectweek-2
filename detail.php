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
        <title>Detail</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href='assets/css/style.css' rel='stylesheet'>
        <link href='assets/css/detail.css' rel='stylesheet'>
    </head>

    <body>
        <?php
        include 'includes/navbar.php';
        ?>
        <!-- navbar -->

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM eventhubdetail WHERE id=$id";
        $result = $con->query($sql) or die('Cannot fetch data from database. ' . mysqli_error($con));
        $row = mysqli_fetch_array($result);
        if ($result->num_rows > 0) {
            $eventnaam = $row['eventnaam'];
            $begindatum = $row['begindatum'];
            $tickets = $row['tickets'];
            $beschrijving = $row['beschrijving'];
            $prijs = $row['prijs'];
            $imgevent = $row['imgevent'];
            $presentator = $row['presentator'];
            $totaltickets = $row['totaltickets'];
            $naam = $row['naam'];
            $straat = $row['straat'];
            $huisnummer = $row['huisnummer en tvg'];
            $postcode = $row['postcode'];
            $plaats = $row['plaats'];
            $Detailid = $row['id'];
           
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-5">


                    <div class="project-info-box">
                        <p><b>Presentator:</b> <?php echo $presentator ?></p>
                        <p><b>Datum:</b> <?php echo $begindatum ?></p>

                        <p><b>Locatie:</b> <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?php echo $plaats ?></p></a>
                        
                        <p><b>Tickets total:</b> <a><?php echo $totaltickets ?></a></p>
                        <p><b>tickets available:</b>
                            <?php
                            if ($tickets <= ($totaltickets * 0.1)) {
                                echo "<br> <label style='color:red'>Almost sold out $tickets tickets available</label>";
                            } else {
                                echo $tickets;
                            }
                            ?></p>
                        <p class="mb-0"><b>Ticket price:</b> <?php echo $prijs ?> euro</p>
                    </div>
                    <div class="project-info-box mt-0">
                        <h5><?php echo $eventnaam ?></h5>
                        <p class="mb-0"><?php echo $beschrijving ?></p>
                    </div>
                    <?php
                        $onclickBestel = "' onclick='location.href=\"bestelformulier.php?id=" . $_GET['id'] . "\"'";
                        echo "<div class='btn btn-warning mb-2 mr-4 float-left mt-2 bestelbutton' . $onclickBestel . >Nu bestellen</div>";
                    ?>
                    
                </div>

                <div class="col-md-7">
                    <img src="<?php echo $imgevent ?>" alt="project-image" class="rounded">
                    <div class="form-group mt-2">
                        <div class="maps">
                            <iframe style="height:250px ; " src="" width="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" left="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        $postcodecijfers = substr($postcode, 0, 4);
                        $postcodeletters = substr($postcode, 4, 6 );
                        
                        echo "City: $plaats <br> Street: $straat  $huisnummer <br> Postal Code: $postcode  <br> Place: $naam <br> 
                        Route: <a href='https://www.google.nl/maps/dir//$naam,+$straat+$huisnummer,+$postcodecijfers+$postcodeletters+$plaats' target='_blank' rel='noopener noreferrer'>Travel directions</a> "
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>

        <script>
            function gotoBestelFormulier() {
                window.location.href = "bestelformulier.php?id=".$Detailid;
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script>
            $('#exampleModalCenter').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
        </script>
    </body>

    </html>