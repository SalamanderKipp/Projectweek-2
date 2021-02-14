<?php
include 'config/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='description' content='Basic loginsystem'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link href='assets/css/bootstrap.min.css' rel='stylesheet'>
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
				<input name='begindatum' id='begindatum' type='date' class='form-control' placeholder='Begindatum' required />
			</div>
			<div class='form-group'>
				<label for='loc
                    atie'>Locatie*</label>
				<input name='locatie' id='locatie' type='text' class='form-control' placeholder='Locatie' required />
			</div>
			<div class='form-group'>
				<label for='beschrijving'>Beschrijving*</label>
				<input name='beschrijving' id='beschrijving' type='text' class='form-control' placeholder='Beschrijving' required />
			</div>
			<div class='form-group'>
				<label for='tickets'>Tickets avalible*</label>
				<input name='tickets' id='tickets' type='number' min="0" class='form-control' placeholder='Tickets' required />
			</div>
			<div class='form-group'>
				<label for='priceofticket'>Price of ticket*</label>
				<input value='&euro;' name='priceofticket' id='priceofticket' min="0" type='text' class='form-control' placeholder='Priceofticket' required />
			</div>
			<div class='form-group'>
				<label for='imgevent'>Img event*</label>
				<input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			<div class='form-group'>
				<label for='begintijd'>Begin tijd*</label>
				<input name='begintijd' id='begintijd' type='time' class='form-control' placeholder='Begintijd' required />
			</div>
			<div class='form-group'>
				<label for='eindtijd'>Eind tijd*</label>
				<input name='eindtijd' id='eindtijd' type='time' class='form-control' placeholder='Eindtijd' required />
			</div>
			<div class='form-group'>
				<label for='presentator'>Presentator</label>
				<input name='presentator' id='presentator' type='text' class='form-control' placeholder='presentator' required />
			</div>
			<div class='form-group'>
				<input type="submit" name='submit' value="Create Event" class='btn btn-warning btn-block'></input>
			</div>
		</form>
	</div>



</body>

</html>