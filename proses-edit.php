<?php
include("CONNECT.php");

if (isset($_POST['simpan'])) {

    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE mahasiwa SET nama='$nama', alamat='$alamat', telpon='$telpon', prodi='$prodi' WHERE id_mahasiswa=$id_mahasiswa";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}