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
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='assets/css/style.css' rel='stylesheet'>
</head>

<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <div class='container' style="border-radius:10px;">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Telefoonnummer</label>
                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="06-12345678">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Naam:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Naam">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Bericht:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Bericht"></textarea>
            </div>
        </form>

        <button type="button" class="btn btn-outline-warning btn-block"> Neem contact op. </button>

        <div class="envelop text-center mt-5">
            <img src="media/img/envelop.png" class="center-block">
        </div>



    </div>






    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>