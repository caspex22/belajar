<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko buku PNJ</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="reaksi.php" method="post">
            <h2 align="center"><span class="badge badge-info col-5">Input Data</span></h2>
                <a href="index.php" class="badge badge-info">Kembali</a>
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode Buku</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kode" placeholder="kode" name='kode'>
                </div>
            </div>
            <div class="form-group row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                <input type="judul" class="form-control" id="judul" placeholder="judul" name='judul'>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                <input type="penerbit" class="form-control" id="penerbit" placeholder="penerbit" name='penerbit'>
                </div>
            </div>
            <div class="form-group row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                <input type="pengarang" class="form-control" id="pengarang" placeholder="pengarang" name='pengarang'>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                <input type="harga" class="form-control" id="harga" placeholder="harga" name='harga'>
                </div>
            </div>
            <div class="form-group row">
                <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
                <div class="col-sm-10">
                <input type="isbn" class="form-control" id="isbn" placeholder="isbn" name='isbn'>
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='sinopsis'></textarea>
                </div>
            </div>


            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" id="kategori" name='kategori'>
                        <option value='manajemen'>Manajemen</option>
                        <option value='internet'>Internet</option>
                    </select>
                </div>
            </div>
            
            <div class="pt-5 py-5">
            <button type="submit" class="btn btn-primary" id="simpan">simpan</button>
            </div>
        </form>
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