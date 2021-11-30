<!DOCTYPE html>
<html>

<head>
	<title>Tugas 7 - 119140009</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- My CSS, Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<center>
			<h1>DATA MAHASISWA</h1>
			<button type="button" class="btn btn-sm btn-flat btn-primary waves-effect" data-toggle="modal" data-target="#modal-mahasiswa" data-backdrop="static" data-keyboard="false">
				Tambah Data
			</button>
			<hr><br>
		</center>
	</div>
	<div class="container">
		<table id="table-mahasiswa" class="table table-striped table-responsive" style="width: 100%;">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Date</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require_once 'connect.php';
				$query = mysqli_query($con, "SELECT * FROM mahasiswa");
				if ($query) {
					$no = 1;
					while ($object = mysqli_fetch_object($query)) { ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $object->name; ?></td>
							<td><?php echo $object->email; ?></td>
							<td><?php echo $object->created_at; ?></td>
							<td>
								<a id="edit" data-id="<?php echo $object->id; ?>" class="btn btn-warning btn-sm">Ubah</a>
								<a id="delete" data-id="<?php echo $object->id; ?>" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
					<?php $no++;
					} ?>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<div id="modal-mahasiswa" tabindex="-1" role="dialog" class="modal fade modal-flex">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Masukan Data</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form id="form-mahasiswa" accept-charset="utf-8" autocomplete="off" method="post">
							<input type="hidden" name="id" id="id">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">
									Nama
								</label>
								<div class="col-sm-10">
									<input type="text" name="name" id="name" class="form-control" required="1" placeholder="Nama" minlength="3" maxlength="35">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">
									Email
								</label>
								<div class="col-sm-10">
									<input type="email" name="email" id="email" class="form-control" required="1" placeholder="Email" minlength="4" maxlength="50">
								</div>
							</div>
							<button type="submit" name="submit_" id="submit_" value="true" hidden="1"></button>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" onclick="$('#submit_').click()" class="btn btn-sm btn-primary waves-effect waves-light btn-block">Tambah</button>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- import js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		const FormSiswa = $("#form-mahasiswa");
		FormSiswa.submit(function(event) {
			event.preventDefault();
			const data = $(this).serialize();
			const con = confirm("Apakah anda yakin ?");
			if (con) {
				if (data) {
					let url, id = $("#id").val();
					if (id) {
						url = "update.php";
					} else {
						url = "save.php";
					}
					$.post(url, data, function(resp) {
						if (resp) {
							alert(resp);
							/*reload*/
							window.location.reload(false);
						}
					});
				}
			} else {
				console.log("Cancel submit");
			}
		});

		/*get byid*/
		$("#table-mahasiswa").on('click', '#edit', function(event) {
			event.preventDefault();
			const id = $(this).data('id');
			if (id) {
				$.post('getById.php', {
					id: id
				}, function(resp) {
					if (resp) {
						let response = $.parseJSON(resp),
							data = response.data;
						if (data) {
							$("#modal-mahasiswa").modal('show');
							$("#id").val(data.id);
							$("#name").val(data.name);
							$("#email").val(data.email);
						}
					}
				});
			}
		});

		/*delete*/
		$("#table-mahasiswa").on('click', '#delete', function(event) {
			event.preventDefault();
			const con = confirm("Yakin ingin menghapus Data ?");
			if (con) {
				/*confirm*/
				const id = $(this).data('id');
				if (id) {
					$.post('delete.php', {
						id: id
					}, function(resp) {
						if (resp) {
							alert(resp);
							window.location.reload(false); // reload
						}
					});
				}
			} else {
				console.log("cancel delete");
			}
		});
	});
</script>

</html>