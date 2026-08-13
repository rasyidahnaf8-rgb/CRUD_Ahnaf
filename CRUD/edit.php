<?php
include "koneksi.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama  = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);

    $query = "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update data: " . mysqli_error($koneksi);
    }
}

$hasil = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$data  = mysqli_fetch_assoc($hasil);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <style>
        body { font-family: "Times New Roman", serif; margin: 30px; }
        label { display: inline-block; width: 80px; }
        input[type=text] { padding: 5px; margin-bottom: 10px; width: 250px; }
        button { padding: 6px 16px; }
    </style>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form method="POST" action="edit.php?id=<?= $data['id'] ?>">
    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
    </div>
    <div>
        <label>Kelas</label>
        <input type="text" name="kelas" value="<?= htmlspecialchars($data['kelas']) ?>" required>
    </div>
    <br>
    <button type="submit" name="update">Update</button>
    <a href="index.php">Batal</a>
</form>

</body>
</html>
