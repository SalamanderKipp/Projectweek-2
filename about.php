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
  <title>About</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href='assets/css/style.css' rel='stylesheet'>
</head>
<!-- De About page -->
<body>
  <?php
  include 'includes/navbar.php';
  ?>

  <div class="container">
    <div class='size-aboutfoto mr-2 mb-2'>
      <img class='size-aboutfoto img-fluid' src="media/img/eventhubkantoor3.png">
    </div>

    <div class='size-aboutfoto1'>
      <img class='size-aboutfoto1 img-fluid' src="media/img/eventhubkantoor1.png">
    </div>
    <div class="clearfix"></div>
    <div class='about-text'>
      <h1 class='box'>Over ons</h1>
      <br>
      <p>Wij zijn eventhub het meest groeiende bedrijf van 2021, wij verkopen tickets die ondernemers op onze website kunnen zetten. Eventhub heeft een team van 400.000 mensen die dag en nacht klaar staan om u te helpen. Wij hebben meerdere kantoren over heel de wereld. Ons hoofdkantoor zit in China te Shanghai, onze CEO is<b> Bram Veltoven</b> daarna hebben we ook nog belangrijke onder directeuren<b> Maarten Bos</b>, <b>Brets Waarle</b> &<b> Max van Dorst</b>.</p>
    </div>

    <div class="employees">
      <img class="w-25 mr-5" src="media/img/bramvelthoven.png">
      <img class="w-25 mr-5" src="media/img/bretswaarle.png">
      <br>
      <img class="w-25 mr-5 mb-5" src="media/img/maartenbos.png">
      <img class="w-25 mr-5 mb-5" src="media/img/maxvandorst.png">
    </div>

  </div>

  <?php
  include 'includes/footer.php';
  ?>
</body>

</html>