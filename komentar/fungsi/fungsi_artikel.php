<?php

function hapusArtikel($idArtikel)
{
	global $conn; 

	$query = "DELETE FROM komentar WHERE id = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function hapusArtikelKomen($idArtikel)
{
	global $conn; 

	$query = "DELETE artikel.*, komentar.* FROM artikel, komentar WHERE artikel.id = '$idArtikel' AND komentar.artikel = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function cekPunyaKomen($idArtikel)
{
	global $conn;
	$query = "SELECT * FROM komentar WHERE artikel = '$idArtikel' ";
	$res   = mysqli_query($conn,$query);

	$cek   = mysqli_num_rows($res);

	if ($cek > 0 ) {
		hapusArtikelKomen($idArtikel);
	} else {
		hapusArtikel($idArtikel);
	}
}