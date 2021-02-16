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
        <!-- navbar -->
        <?php
        include 'includes/navbar.php';
        ?>


        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM eventhubdetail WHERE id=$id";
        $result = $con->query($sql) or die('Cannot fetch data from database. ' . mysqli_error($con));
        $row = mysqli_fetch_array($result);
        if ($result->num_rows > 0) {
            $eventnaam = $row['eventnaam'];
            $begindatum = $row['begindatum'];
            $tickets = $row['tickets'];
            $locatie = $row['locatie'];
            $beschrijving = $row['beschrijving'];
            $prijs = $row['prijs'];
            $imgevent = $row['imgevent'];
            $begintijd = $row['begintijd'];
            $eindtijd = $row['eindtijd'];
            $presentator = $row['presentator'];
            $totaltickets = $row['totaltickets'];
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="project-info-box mt-0">
                        <h5><?php echo $eventnaam ?> informatie</h5>
                        <p class="mb-0"><?php echo $beschrijving ?></p>
                    </div>

                    <div class="project-info-box">
                        <p><b>Artiest:</b> <?php echo $presentator ?></p>
                        <p><b>Datum:</b> <?php echo $begindatum ?></p>

                        <p><b>Locatie:</b> <?php echo $locatie ?>
                        </p>
                        <p><b>Plaatsen over:</b> <?php echo $tickets ?>
                        <p class="mb-0"><b>Prijs p. stuk:</b> <?php echo $prijs ?></p>
                    </div>
                </div>

                <div class="col-md-7">
                    <img src="<?php echo $imgevent ?>" alt="project-image" class="rounded">
                    <a href="bestelformulier.php" class='btn btn-outline-warning mb-2 mr-4 float-left mt-2'>Nu bestellen</a>
                    <div class="form-group mt-2">
                        <label for="aantal"> Aantal tickets: </label>
                        <input class="aantalinput" type="number" id="aantal" name="aantal" min="1" max="<?php echo $totaltickets ?>">
                        <div class="maps">
                            <iframe style="height:250px ; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78456.01622610292!2d5.012451774500169!3d52.08427148563303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c66f4339d32d37%3A0xd6c8fc4c19af4ae9!2sUtrecht!5e0!3m2!1snl!2snl!4v1613386002175!5m2!1snl!2snl" width="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" left="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- google maps -->





        <!-- footer -->
        <?php
        include 'includes/footer.php';
        ?>

        <script>
            src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        </script>
        <script>
            scr = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        </script>
    </body>

    </html>