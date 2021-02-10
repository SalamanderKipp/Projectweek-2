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
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<title>Basic Login System</title>
</head>

<body>
<<<<<<< HEAD
	<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
		<span>
			<a href="logout.php" class='btn btn-primary btn-block'>Log Out</a>
			<?php
			if (isset($_SESSION['username'])) {
				echo $_SESSION['username'];
			} else {
				echo "Je bent niet ingelogt!!!";
			}

			?>
		</span>
	</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12 col-lg-offset-2'>
				<div class='col-lg-12 col-lg-offset-2'>
					<h3>User Data</h3>
					<hr>
					<div class='table-responsive'>
						<table class='table table-striped'>
							<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>E-mail</th>
									<th>Username</th>
									<th>Password</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query = "SELECT * FROM `tbl_users`";
								$result = mysqli_query($con, $query) or die('Cannot fetch data from database. ' . mysqli_error($con));
								if (mysqli_num_rows($result) > 0) {
									while ($user = mysqli_fetch_assoc($result)) {
										echo '<tr>';
										echo '<td>' . $user['firstname']  . '</td>';
										echo '<td>' . $user['lastname']   . '</td>';
										echo '<td>' . $user['email']      . '</td>';
										echo '<td>' . $user['username']   . '</td>';
										echo '<td>' . $user['password']   . '</td>';
										echo '<td><a href="config/actions.php?del=' . $user['id'] . '" class="btn btn-sm btn-danger">Delete</a></td>';
										echo '<td><a href="update.php?upd=' . $user['id'] . '" class="btn btn-sm btn-warning">Update</a></td>';
										echo '</tr>';
									}
								}
								mysqli_free_result($result);
								mysqli_close($con);

								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

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