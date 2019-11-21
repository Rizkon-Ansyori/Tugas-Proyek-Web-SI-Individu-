<?php 
include 'fungsi/config.php';
include 'trajek.php';
?>
<?php
@$rowKomentar = tampilKomentar($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artikel Komen Mysqli</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi Komentar</label>
				<textarea name="isi" class="form-control" rows="5"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnkomen">
				Masukkan Komentar
			</button>
		</form>
		<hr>
		<?php
			if (isset($_POST['btnkomen'])) {
				@postKomentar($_POST, $_GET['id']);
				}
		?>
		
		<!-- <div class="alert alert-success">asdasd</div> -->
		<?php foreach ($rowKomentar as $row): ?>
			
			<div class="well">
				<b><?= $row['nama'] ?></b> <br>
				<p><?= $row['isi'] ?></p>
				<a href="hapusArtikel.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">
					<i class="glyphicon glyphicon-trash"></i>
				</a>
			</div>
		<?php endforeach ?>
		<hr>
		<a href="index.php">
			<button class="btn btn-default">
				Kembali
			</button>
		</a>
		<hr>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>