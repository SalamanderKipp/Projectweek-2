<?php
require '../config/config.php';
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
	<link href='../css/bootstrap.min.css' rel='stylesheet'>
	<title>Update eventpage</title>
</head>

<body>
	<?php
	include '../includes/navbar.php';
	?>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<div class='col-lg-4 col-lg-offset-4'>
					<h3>Update Data</h3>
					<hr />
					<form name='update' id='update' action='config/action-event.php?id=<?php echo $user['id'] ?>' method='post'>
						<div class='form-group'>
							<label for='eventnaam'>Event naam</label>
							<input value="<?php echo $user['eventnaam'] ?>" name='eventnaam' id='eventnaam' type='text' class='form-control' placeholder='eventnaam' required />
						</div>
						<div class='form-group'>
							<label for='begindatum'>Begin datum</label>
							<input value="<?php echo $user['begindatum'] ?>" name='begindatum' id='begindatum' type='text' class='form-control' placeholder='begindatum' required />
						</div>
						<div class='form-group'>
							<button name='btnupdate' id='update' class='btn btn-primary btn-block'>Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>