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
    <title>Bestelformulier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <div class="container">
        <h3>Bestelformulier</h3>
        <hr />
        <form name='signup' id='signup' action='config/action-bestel.php' method='post'>
            <div class='form-group'>
                <label for='Voornaam'>Voornaam*</label>
                <input name='Voornaam' id='Voornaam' type='text' class='form-control' placeholder='Voornaam' required />
            </div>
            <div class='form-group'>
                <label for='Achternaam'>Achternaam*</label>
                <input name='Achternaam' id='Achternaam' type='text' class='form-control' placeholder='Achternaam' required />
            </div>
            <div class='form-group'>
                <label for='Email'>E-mailaderes*</label>
                <input name='Email' id='Email' type='email' class='form-control' placeholder='Email' required />
            </div>
            <div class='form-group'>
                <label for='Telefoonnummer'>Telefoonnummer*</label>
                <input name='Telefoonnummer' id='Telefoonnummer' type='tel' class='form-control' placeholder='Telefoonnummer' required />
            </div>
            <div class='form-group'>
                <label for='Straatnaam'>Straatnaam*</label>
                <input name='Straatnaam' id='Straatnaam' type='text' class='form-control' placeholder='Straatnaam' required />
            </div>
            <div class='form-group'>
                <label for='Huisnummer'>Huisnummer*</label>
                <input name='Huisnummer' id='Huisnummer' type='number' min="1" class='form-control' placeholder='Huisnummer' required />
            </div>
            <div class='form-group'>
                <label for='Postcode'>Postcode*</label>
                <input name='Postcode' id='Postcode' type='text' class='form-control' placeholder='Postcode' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
            </div>
            <div class='form-group'>
                <label for='Plaats'>Plaats*</label>
                <input name='Plaats' id='Plaats' type='text' class='form-control' placeholder='Plaats' required />
            </div>
            <div class='form-group'>
                <label for='Land'>Land*</label>
                <select name="Land" class='form-control' id="Land">
                    <option value="Nederland">Nederland</option>
                    <option value="Duitsland">Duitsland</option>
                    <option value="België">België</option>
                </select>
            </div>
            <div class='form-group'>
                <label for='Kaartjes'>Kaartjes*</label>
                <input name='Kaartjes' id='Kaartjes' type='number' min="0" class='form-control' placeholder='Kaartjes' required />
            </div>
            <div class='form-group'>
                <button name='submit' id='submit' class='btn btn-warning btn-block'>Bestel</button>
            </div>
        </form>
    </div>

</body>

</html>