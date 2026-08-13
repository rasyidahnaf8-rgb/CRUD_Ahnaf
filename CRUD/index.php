<?php
include "koneksi.php";

$hitung = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah FROM siswa");
$row_hitung = mysqli_fetch_assoc($hitung);
var_dump((int)$row_hitung['jumlah']);

$query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 30px;
        }
        h2 {
            margin-bottom: 5px;
        }
        table {
            border-collapse: collapse;
            width: 480px;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            color: #4b0082;
            text-decoration: underline;
        }
        .aksi a {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<h2>Data Siswa</h2>

<p><a href="tambah.php">Tambah Siswa</a></p>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($data['nama']) ?></td>
        <td><?= htmlspecialchars($data['kelas']) ?></td>
        <td class="aksi">
            <a href="edit.php?id=<?= $data['id'] ?>">Edit</a> |
            <a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
