<?php
include 'config/config-event.php';
session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='description' content='Basic loginsystem'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<title>create Event</title>
</head>

<body>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
		<span>
			<?php
			if (isset($_SESSION['username'])) {
				echo $_SESSION['username'];
			} else {
				echo "Je bent niet ingelogt!!!";
			}

			?>
		</span>
	</nav>
	

		<div class='row'>
			<div class='col-lg-8 col-lg-offset-2'>
				<div class='col-lg-6 col-lg-offset-3'>
					<h3>Add event</h3>
					<hr />
					<form name='createEvent' id='createEvent' action='config/actions.php' method='post'>
						<div class='form-group'>
							<label for='eventnaam'>Event naam*</label>
							<input name='eventnaam' id='eventnaam' type='text' class='form-control' placeholder='eventnaam' required />
						</div>
						<div class='form-group'>
							<label for='begindatum'>Begin Datum*</label>
							<input name='begindatum' id='begindatum' type='text' class='form-control' placeholder='begindatum' required />
						</div>
						<div class='form-group'>
							<label for='locatie'>Locatie*</label>
							<input name='locatie' id='locatie' type='text' class='form-control' placeholder='locatie' required />
						</div>
						<div class='form-group'>
							<label for='beschrijving'>beschrijving*</label>
							<input name='beschrijving' id='beschrijving' type='text' class='form-control' placeholder='beschrijving' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
                        <div class='form-group'>
							<label for='tickets'>Tickets avalible*</label>
							<input name='tickets' id='tickets' type='text' class='form-control' placeholder='tickets' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
                        <div class='form-group'>
							<label for='priceofticket'>price of ticket*</label>
							<input name='priceofticket' id='priceofticket' type='text' class='form-control' placeholder='priceofticket' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
                        <div class='form-group'>
							<label for='imgevent'>img event*</label>
							<input name='imgevent' id='imgevent' type='text' class='form-control' placeholder='imgevent' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
                        <div class='form-group'>
							<label for='begintijd'>Begin tijd*</label>
							<input name='begintijd' id='begintijd' type='text' class='form-control' placeholder='begintijd' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
                        <div class='form-group'>
							<label for='eindtijd'>Eind tijd*</label>
							<input name='eindtijd' id='eindtijd' type='text' class='form-control' placeholder='eindtijd' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
                        <div class='form-group'>
							<label for='presentator'>Presentator</label>
							<input name='presentator' id='presentator' type='text' class='form-control' placeholder='presentator' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
						<div class='form-group'>
							<button name='submit' id='submit' class='btn btn-primary btn-block'>Create event</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>