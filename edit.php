<?php

include "CONNECT.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM mahasiwa WHERE id_mahasiswa='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
    </head>

    <body>
        <header>
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>" />
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $d['nama']; ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"><?php echo $d['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="telpon">Nomor HP: </label>
                    <textarea name="telpon"><?php echo $d['telpon'] ?></textarea>
                </p>
                <p>
                    <label for="prodi">Kodepos: </label>
                    <input type="text" name="prodi" placeholder="prodi" value="<?php echo $d['prodi'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>