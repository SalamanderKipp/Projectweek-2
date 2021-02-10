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
    <title>Member register</title>
</head>

<body>
<div class='row'>
			<div class='col-lg-8 col-lg-offset-2'>
				<div class='col-lg-6 col-lg-offset-3'>
					<h3>Register</h3>
					<hr />
					<form name='signup' id='signup' action='config/actions.php' method='post'>
						<div class='form-group'>
							<label for='firstname'>Firstname</label>
							<input name='firstname' id='firstname' type='text' class='form-control' placeholder='firstname' required />
						</div>
						<div class='form-group'>
							<label for='lastname'>Lastname</label>
							<input name='lastname' id='lastname' type='text' class='form-control' placeholder='lastname' required />
						</div>
                        <div class='form-group'>
							<label for='Companyname'>Companyname</label>
							<input name='Companyname' id='Companyname' type='text' class='form-control' placeholder='Companyname' required />
						</div>
						<div class='form-group'>
							<label for='email'>E-mail</label>
							<input name='email' id='email' type='text' class='form-control' placeholder='email' required />
						</div>
						<div class='form-group'>
							<label for='username'>Username</label>
							<input name='username' id='username' type='text' class='form-control' placeholder='username' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
						<div class='form-group'>
							<label for='password'>Password</label>
							<input name='password' id='password' type='password' class='form-control' placeholder='password' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
						</div>
						<div class='form-group'>
							<button name='submit' id='submit' class='btn btn-primary btn-block'>Register</button>

						</div>
					</form>
					<form action="login.php"><input type="submit" class='btn btn-primary btn-block' value="Login"></input></form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>