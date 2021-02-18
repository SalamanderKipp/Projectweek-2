<?php
include 'config/config.php';
include 'check.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='description' content='Basic loginsystem'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href='assets/css/style.css' rel='stylesheet'>
	<title>create Event</title>
</head>

<body>
	<?php
	include 'includes/navbar.php';
	?>
	<div class='container'>
		<h3>Add event</h3>
		<hr />
		<form name='createEvent' id='createEvent' action='upload.php' method='post' enctype="multipart/form-data">
			<div class='form-group'>
				<label for='eventnaam'>Event naam*</label>
				<input name='eventnaam' id='eventnaam' type='text' class='form-control' placeholder='Eventnaam' required />
			</div>
			<div class='form-group'>
				<label for='begindatum'>Begin Datum*</label>
				<input name='begindatum' id='begindatum' type='datetime-local' class='form-control' placeholder='begindatum' required />
			</div>
			<div class='form-group'>
				<label for='einddatum'>Eind Datum*</label>
				<input name='einddatum' id='einddatum' type='datetime-local' class='form-control' placeholder='einddatum' />
			</div>
			<div class='form-group'>
				<label for='beschrijving'>Beschrijving*</label>
				<textarea name='beschrijving' id='beschrijving' rows="4" maxlength="350" type='text' class='form-control' placeholder='Beschrijving' required></textarea>
			</div>
			<div class='form-group'>
				<label for='tickets'>Tickets avalible*</label>
				<input name='tickets' id='tickets' type='number' min="1" class='form-control' placeholder='Tickets' required />
			</div>
			<div class='form-group'>
				<label for='prijs'>Price of ticket*</label>
				<input value='' name='prijs' id='prijs' min="0" step="0.01" type='number' class='form-control' placeholder='Price of ticket' required />
			</div>
			<div class="form-group col-12">
				<input type="file" name="fileToUpload" class="custom-file-input" id="fileToUpload" required></input>
				<label for="fileToUpload" class="custom-file-label">Upload File</label>
			</div>
			<div class='form-group'>
				<label for='presentator'>Presentator</label>
				<input name='presentator' id='presentator' type='text' class='form-control' placeholder='presentator' required />
			</div>
			<div class='form-group'>
				<label for='locatie'>Location*</label>
				<input name='naam' id='naam' type='text' class='form-control' placeholder='Naam' required />
				<input name='straat' id='straat' type='text' class='form-control mt-2' placeholder='Straat' required />
				<div>
					<input name='huisnummer' id='huisnummer' type='number' min="1" class='mt-2 huisnummerLocatie' placeholder='Huisnummer' required />
					<input name='tvg' id='tvg' type='text' min="1" class='mt-2 huisnummerLocatie' placeholder='Tvg' />
				</div>
				<input name='postcode' id='postcode' type='text' class='form-control mt-2' placeholder='Postcode' required />
				<input name='plaats' id='plaats' type='text' class='form-control mt-2' placeholder='Plaats' required />
			</div>
			<div class='form-group'>
				<input type="submit" name='submit' value="Create Event" class='btn btn-warning btn-block'></input>
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