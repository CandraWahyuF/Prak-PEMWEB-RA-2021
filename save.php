<?php
if ($_POST) {
	require_once 'connect.php';
	try {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sql = "INSERT INTO mahasiswa (name, email) VALUES ('$name', '$email')";
		if (!$con->query($sql)) {
			echo $con->error;
		} else {
			echo json_encode("Data Berhasil Dimasukan");
		}
	} catch (Exception $ex) {
		echo $ex;
	}
} else {
	http_response_code(405); // method not allowed
}
