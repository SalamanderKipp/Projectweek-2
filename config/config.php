<?php
	// Zo kan je connecten met localhost
	$con = mysqli_connect('localhost', 'root', '', 'eventhub') or die('Cannot connect to database. '.mysqli_connect_error());
