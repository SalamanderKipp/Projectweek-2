<?php
include 'config/config.php';
session_start();
?>
<?php
require 'config/config.php';
if (isset($_GET['upd'])) {
	$id     = $_GET['upd'];
	$query  = "SELECT * FROM `bestformulier` WHERE id=$id";
	$result = mysqli_query($con, $query);
	$user   = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='description' content='Basic loginsystem'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Basic Login System</title>
</head>

<body>
	<?php
	include 'includes/navbar.php';
	?>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<div class='col-lg-4 col-lg-offset-4'>
					<h3>Update Data</h3>
					<hr />
					<form name='update' action='config/action-bestel.php?id=<?php echo $user['id'] ?>' method='post'>
						<div class='form-group'>
							<label for='Voornaam'>Voornaam*</label>
							<input value="<?php echo $user['Voornaam'] ?>" name='Voornaam' id='Voornaam' type='text' class='form-control' placeholder='Voornaam' required />
						</div>
						<div class='form-group'>
							<label for='Achternaam'>Achternaam*</label>
							<input value="<?php echo $user['Achternaam'] ?>" name='Achternaam' id='Achternaam' type='text' class='form-control' placeholder='Achternaam' required />
						</div>
						<div class='form-group'>
							<label for='Email'>E-mailaderes*</label>
							<input value="<?php echo $user['Email'] ?>" name='Email' id='Email' type='email' class='form-control' placeholder='Email' required />
						</div>
						<div class='form-group'>
							<label for='Telefoonnummer'>Telefoonnummer*</label>
							<input value="<?php echo $user['Telefoonnummer'] ?>" name='Telefoonnummer' id='Telefoonnummer' type='tel' class='form-control' placeholder='Telefoonnummer' required />
						</div>
						<div class='form-group'>
							<label for='Straatnaam'>Straatnaam*</label>
							<input value="<?php echo $user['Straatnaam'] ?>" name='Straatnaam' id='Straatnaam' type='text' class='form-control' placeholder='Straatnaam' required />
						</div>
						<div class='form-group'>
							<label for='Huisnummer'>Huisnummer*</label>
							<input value="<?php echo $user['Huisnummer'] ?>" name='Huisnummer' id='Huisnummer' type='number' min="1" class='form-control' placeholder='Huisnummer' required />
						</div>
						<div class='form-group'>
							<label for='Postcode'>Postcode*</label>
							<input value="<?php echo $user['Postcode'] ?>" name='Postcode' id='Postcode' type='text' class='form-control' placeholder='Postcode' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
						<div class='form-group'>
							<label for='Plaats'>Plaats*</label>
							<input value="<?php echo $user['Plaats'] ?>" name='Plaats' id='Plaats' type='text' class='form-control' placeholder='Plaats' required />
						</div>
						<div class='form-group'>
							<label for='Land'>Land*</label>
							<select value="<?php echo $user['Land'] ?>" name="Land" class='form-control' id="Land">
								<option value="Nederland">Nederland</option>
								<option value="Duitsland">Duitsland</option>
								<option value="België">België</option>
							</select>
						</div>
						<div class='form-group'>
							<label for='Kaartjes'>Tickets*</label>
							<input value="<?php echo $user['tickets'] ?>" name='tickets' id='tickets' type='number' min="0" class='form-control' placeholder='Tickets' required />
						</div>
						<div class='form-group'>
							<button name='btnupdate' id='update' class='btn btn-warning btn-block'>Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	include 'includes/footer.php';
	?>
</body>

</html>