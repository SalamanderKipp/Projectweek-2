<?php
include 'config/config.php';
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
    <?php
    $id = $_POST['id'];
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
    }
    ?>
    <div class="container">
        <h3>Bestelformulier</h3>
        <hr />
        <h3><?php echo $eventnaam ?></h3>
        <form name='signup' id='signup' action='config/action-bestel.php' method='post'>
            
            <div class='form-group'>
                <input type="hidden" name="ticketsSelected" id="ticketsSelected" value="<?php echo $_POST['tickets'] ?>">
                <input type="hidden" name="priceOfTickets" id="priceOfTickets" value="<?php echo $prijs * $_POST['tickets']?>">
                
                <input type="hidden" name="id" id="id" value="<?php echo $_POST['id'] ?>">
            </div>
            <div class='form-group'>
                <p readonly class='form-control' > <?php echo 'Tickets selected:' . ' ' . $_POST['tickets'] ?> </p>
                <p readonly class='form-control' > <?php echo 'Prijs:' . ' ' . $prijs * $_POST['tickets'] . ' euro' ?> </p>
            </div>
            <div class='form-group'>
                <label for='Voornaam'>Voornaam*</label>
                <input name='Voornaam' id='Voornaam' type='text' class='form-control' placeholder='Voornaam' />
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
                <input type="submit" name='submit' id='submit' value="Bestel" class='btn btn-warning btn-block'></input>
            </div>
        </form>
    </div>

</body>

</html>