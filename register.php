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
	<title>Basic Login System</title>
</head>

<body>
	<?php
	include 'includes/navbar.php';
	?>



	<div class="container">
		<h3>Register</h3>
		<hr />
		<form name='signup' id='signup' action='config/actions.php' method='post'>
			<div class='form-group'>
				<label for='firstname'>Firstname*</label>
				<input name='firstname' id='firstname' type='text' class='form-control' placeholder='firstname' required />
			</div>
			<div class='form-group'>
				<label for='lastname'>Lastname*</label>
				<input name='lastname' id='lastname' type='text' class='form-control' placeholder='lastname' required />
			</div>
			<div class='form-group'>
				<label for='email'>E-mail*</label>
				<input name='email' id='email' type='text' class='form-control' placeholder='email' required />
			</div>
			<div class='form-group'>
				<label for='username'>Username*</label>
				<input name='username' id='username' type='text' class='form-control' placeholder='username' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
			</div>
			<div class='form-group'>
				<label for='password'>Password*</label>
				<input name='password' id='password' type='password' class='form-control' placeholder='password' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
			</div>
			<div class='form-group'>
				<button name='submit' id='submit' class='btn btn-warning btn-block'>Register</button>
			</div>
		</form>
	</div>
</body>

</html>