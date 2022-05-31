<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <header>
            <h3>Tambah Identitas</h3>
        </header>

        <div class="row">
            <div class="col-md-8">
                <form action="proses-tambah.php" method="POST">
                        
                        <div>
                            <label for="nama" class="form-label">Nama: </label>
                            <input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
                        </div>
                        <div>
                            <label for="alamat" class="form-label">Alamat: </label>
                            <textarea name="alamat" class="form-control" placeholder="alamat"></textarea>
                        </div>
                        <div>
                            <label for="telpon" class="form-label">Nomor HP: </label>
                            <textarea name="telpon" class="form-control" placeholder="no hpnya sayang"></textarea>
                        </div>
                        
                        <div>
                            <label for="prodi" class="form-label">prodi: </label>
                            <input type="text" class="form-control" name="prodi" placeholder="prodi" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mt-3" value="Daftar" name="daftar">Tambah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>