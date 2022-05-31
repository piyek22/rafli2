<?php
include("CONNECT.php");

if (isset($_POST['daftar'])) {


    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $prodi = $_POST['prodi'];


    mysqli_query($db, "INSERT INTO mahasiwa VALUES
    ('', '$nama', '$alamat', '$telpon', '$prodi')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}