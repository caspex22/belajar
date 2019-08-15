<?php
include_once "koneksi.php";

$kode = $_POST['kode'];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];
$isbn = $_POST['isbn'];
$sinopsis = $_POST['sinopsis'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi, "insert into tokopnj values ('', '$kode', '$judul', '$penerbit', '$pengarang', '$kategori','$harga', '$isbn', '$sinopsis')");

header("Location: index.php");


?>