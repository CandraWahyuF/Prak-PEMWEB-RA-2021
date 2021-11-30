<?php
// host, username, password, database.
$con = new mysqli("localhost", "root", "", "data_mhs");
if ($con->connect_error) {
	echo "Failed to connect to MySQL: " . $con->connect_error;
	exit();
}
