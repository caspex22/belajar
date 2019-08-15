@created by caspex22

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko buku PNJ</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <h1 align="center"><span class="badge badge-info">Data Buku</span></h1>
        <a href="tambah.php" class="badge badge-info lg">Tambah Data Buku</a>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Sinopsis</th>
                    <th scope="col">Option</th>
                    </tr>
                </thead>
                            <?php
                                include "koneksi.php";

                                $no = 1;
                                $data = mysqli_query($koneksi, "select * from tokopnj");
                                while ($d = mysqli_fetch_array($data)) {
                                   ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php  echo $no++;?></th>
                    <td><?php echo $d['kode'] ?></td>
                    <td><?php echo $d['judul']; ?></td>
                    <td><?php echo $d['penerbit']; ?></td>
                    <td><?php echo $d['pengarang']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><?php echo $d['isbn']; ?></td>
                    <td><?php echo $d['sinopsis']; ?></td>
                    <td>
                        <a href="edit.php?no=<?php echo $d['no']; ?>"><i class=" small material-icons">edit</i></a>
                        <a href="hapus.php?no=<?php echo $d['no']; ?>" onClick="return confirm('Menghapus Data?')"><i class="small material-icons">delete</i></a>
                    </td>
                    </tr>
                </tbody>
                <?php
                                }
                ?>
            </table>
    </div>

</body>
</html>


<script src="../js/bootstrap.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>