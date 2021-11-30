<?php
if ($_POST) {
	$id = $_POST['id'];
	if ($id) {
		require_once 'connect.php';
		try {
			$sql = "DELETE FROM siswa WHERE id = '$id'";
			if (!$con->query($sql)) {
				echo $con->error;
			} else {
				echo "Berhasil Menghapus Data";
			}
		} catch (Exception $ex) {
			echo $ex;
		}
	} else {
		http_response_code(400); // Bad request
	}
} else {
	http_response_code(405); // method not allowed
}
