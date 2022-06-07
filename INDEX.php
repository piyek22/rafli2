<?php
session_start();
if(isset($_SESSION['username'])){
    echo "selamat datang ". $_SESSION ['username'];
    echo "<a href= 'logout.php'>logout</a>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <a href="tambah.php" class="btn btn-success mt-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            TAMBAH IDENTITAS
        </a>
        <a href="login.php" class="btn btn-success mt-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            LOGIN
        </a>

        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <thead class="table-danger">
                        <tr>
                            <th>nomor</th>
                            <th>id_mahasiswa</th>
                            <th>nama</th>
                            <th>alamat</th>
                            <th>telpon</th>
                            <th>prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    include 'CONNECT.php';
                    $no = 1;
                    $data = mysqli_query($db, "SELECT * FROM mahasiwa");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id_mahasiswa']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['telpon']; ?></td>
                                <td><?php echo $d['prodi']; ?></td>
                                <td>
                                    <a class="btn btn-outline-success" href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>">EDIT</a>
                                    <a class="btn btn-outline-danger" href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>