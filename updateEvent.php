<?php
include 'config/config.php';
session_start();
?>
<?php
require 'config/config.php';
if (isset($_GET['upd'])) {
	$id     = $_GET['upd'];
	$query  = "SELECT * FROM `eventhubdetail` WHERE id=$id";
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
	<meta name='description' content='Update eventpage'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href='assets/css/style.css' rel='stylesheet'>
	<title>Update eventpage</title>
</head>

<body>
	<?php
	include 'includes/navbar.php';
	?>
	<div class='container'>
		<h3>Update Data</h3>
		<hr />
		<form name='update' id='update' action='upload-overwrite.php?id=<?php echo $user['id'] ?>' method='post' enctype='multipart/form-data'>
			<div class='form-group'>
				<label for='eventnaam'>Event naam</label>
				<input value="<?php echo $user['eventnaam'] ?>" name='eventnaam' id='eventnaam' type='text' class='form-control' placeholder='eventnaam' required />
			</div>
			<div class='form-group'>
				<label for='begindatum'>Begin Datum*</label>
				<input value="<?php echo $user['begindatum'] ?>" name='begindatum' id='begindatum' type='text' class='form-control' placeholder='begindatum' required />
			</div>
			<div class='form-group'>
				<label for='einddatum'>Eind Datum*</label>
				<input value="<?php echo $user['einddatum'] ?>" name='einddatum' id='einddatum' type='text' class='form-control' placeholder='einddatum' />
			</div>
			<div class='form-group'>
				<label for='tickets'>Tickets</label>
				<input value="<?php echo $user['tickets'] ?>" name='tickets' min="0" id='tickets' type='number' class='form-control' placeholder='Tickets' required />
			</div>
			<div class='form-group'>
				<label for='beschrijving'>Beschrijving</label>
				<textarea value="" name='beschrijving' rows="4" maxlength="350" id='beschrijving' type='text' class='form-control' placeholder='beschrijving' required><?php echo $user['beschrijving'] ?></textarea>
			</div>
			<div class='form-group'>
				<label for='prijs'>Price of ticket*</label>
				<input value="<?php echo $user['prijs'] ?>" name='prijs' id='prijs' min="0" step="0.01" type='number' class='form-control' placeholder='Price of ticket in Euros' required />
			</div>
			<div class="form-group col-12">
				<input type="file" name="fileToUpload" class="custom-file-input" id="fileToUpload"></input>
				<label for="fileToUpload" class="custom-file-label"><?php echo substr($user['imgevent'], 10) ?></label>
			</div>
			<div class='form-group'>
				<label for='presentator'>Presentator</label>
				<input value="<?php echo $user['presentator'] ?>" name='presentator' id='presentator' type='text' class='form-control' placeholder='Presentator' required />
			</div>
			<div class='form-group'>
				<label for='locatie'>Location*</label>
				<input value="<?php echo $user['naam'] ?>" name='naam' id='naam' type='text' class='form-control' placeholder='Naam' required />
				<input value="<?php echo $user['straat'] ?>" name='straat' id='straat' type='text' class='form-control mt-2' placeholder='Straat' required />
				<input value="<?php echo $user['huisnummer en tvg'] ?>" name='huisnummer' id='huisnummer' type='text' class='form-control mt-2' placeholder='Huisnummer' required />
				<input value="<?php echo $user['postcode'] ?>" name='postcode' id='postcode' type='text' class='form-control mt-2' placeholder='Postcode' required />
				<input value="<?php echo $user['plaats'] ?>" name='plaats' id='plaats' type='text' class='form-control mt-2' placeholder='Plaats' required />
			</div>
			<div class='form-group'>
				<button name='btnupdate' id='update' class='btn btn-warning btn-block'>Update</button>
			</div>
		</form>
	</div>
	<script>
		document.querySelector('.custom-file-input').addEventListener('change', function(e) {
			var name = document.getElementById("fileToUpload").files[0].name;
			var nextSibling = e.target.nextElementSibling
			nextSibling.innerText = name
		})
	</script>
	<?php
	include 'includes/footer.php';
	?>


</body>

</html>