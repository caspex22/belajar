@created by caspex22

<?php

include_once "koneksi.php";

if (isset($_POST['update'])) {
    $no = $_POST['no'];
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $harga = $_POST['harga'];
    $isbn = $_POST['isbn'];
    $sinopsis = $_POST['sinopsis'];
    $kategori = $_POST['kategori'];

    $data = mysqli_query($koneksi, "UPDATE tokopnj SET kode='$kode', judul='$judul', penerbit='$penerbit', pengarang='$pengarang', harga='$harga', isbn='$isbn', sinopsis='$sinopsis', kategori='$kategori' WHERE no =$no" );

    header("Location: index.php");
    

}
?>

<?php
    $no = $_GET['no'];
    $data = mysqli_query($koneksi, "SELECT * FROM tokopnj WHERE no= $no");

    while ($userData = mysqli_fetch_array($data)) {
        $kode = $userData['kode'];
        $judul = $userData['judul'];
        $penerbit = $userData['penerbit'];
        $pengarang = $userData['pengarang'];
        $harga = $userData['harga'];
        $isbn = $userData['isbn'];
        $sinopsis = $userData['sinopsis'];
        $kategori = $userData['kategori'];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2 align="center"><span class="badge badge-info">Edit Data Buku</span></h2>
        <a href="index.php" class="badge badge-info lg">kembali</a>
        <form action="edit.php" method="post" name="update">
            <table>
                <div>
                    <div class="form-group row">
                        <label for="kode" class="col-sm-2 col-form-label">Kode Buku</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" placeholder="kode" name='kode' value=<?php echo $kode; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                        <input type="judul" class="form-control" id="judul" placeholder="judul" name='judul' value=<?php echo $judul; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                        <input type="penerbit" class="form-control" id="penerbit" placeholder="penerbit" name='penerbit' value=<?php echo $penerbit; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                        <input type="pengarang" class="form-control" id="pengarang" placeholder="pengarang" name='pengarang' value=<?php echo $pengarang; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="harga" class="form-control" id="harga" placeholder="harga" name='harga' value=<?php echo $harga; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
                        <div class="col-sm-10">
                        <input type="isbn" class="form-control" id="isbn" placeholder="isbn" name='isbn'value=<?php echo $isbn; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Sinopsis</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis" value=<?php echo $sinopsis; ?>></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kategori" name='kategori' value=<?php echo $kategori; ?>>
                                <option value='manajemen'>Manajemen</option>
                                <option value='internet'>Internet</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="pt-5 py-5">
                    <td><input type="hidden" name="no" value=<?php echo $_GET['no']; ?>></td>
                    <button type="submit" class="btn btn-primary" value="update" name="update">simpan</button>
                    </div>
                </div>
            </table>
        </form>
    </div>
</body>
</html>