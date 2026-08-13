<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama  = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);

    $query = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <style>
        body { font-family: "Times New Roman", serif; margin: 30px; }
        label { display: inline-block; width: 80px; }
        input[type=text] { padding: 5px; margin-bottom: 10px; width: 250px; }
        button { padding: 6px 16px; }
    </style>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<form method="POST" action="tambah.php">
    <div>
        <label>Nama</label>
        <input type="text" name="nama" required>
    </div>
    <div>
        <label>Kelas</label>
        <input type="text" name="kelas" required>
    </div>
    <br>
    <button type="submit" name="simpan">Simpan</button>
    <a href="index.php">Batal</a>
</form>

</body>
</html>
