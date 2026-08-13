# CRUD Data Siswa (PHP + MySQL)

## Struktur File
- `siswa.sql` → script untuk membuat database & tabel
- `koneksi.php` → koneksi ke database MySQL
- `index.php` → menampilkan semua data siswa (Read)
- `tambah.php` → form tambah data siswa (Create)
- `edit.php` → form edit data siswa (Update)
- `hapus.php` → proses hapus data siswa (Delete)

## Cara Menjalankan

1. **Install XAMPP/Laragon** (jika belum ada), lalu jalankan Apache dan MySQL.

2. **Import database:**
   - Buka phpMyAdmin (`http://localhost/phpmyadmin`)
   - Buat database baru atau langsung import file `siswa.sql`
     (query di dalamnya sudah termasuk `CREATE DATABASE`)

3. **Salin folder project:**
   - Copy folder `crud_siswa` ke dalam folder `htdocs` (XAMPP) atau `www` (Laragon)

4. **Sesuaikan koneksi database** di `koneksi.php` jika perlu:
   ```php
   $host   = "localhost";
   $user   = "root";
   $pass   = "";
   $dbname = "db_siswa";
   ```

5. **Buka di browser:**
   ```
   http://localhost/crud_siswa/index.php
   ```

## Fitur
- ✅ Tampil data siswa dalam tabel
- ✅ Tambah data siswa baru
- ✅ Edit data siswa
- ✅ Hapus data siswa (dengan konfirmasi)
- ✅ Menampilkan status koneksi & jumlah data (seperti pada tampilan awal)

## Catatan
Kode ini menggunakan `mysqli` versi prosedural sederhana agar mudah dipahami untuk pemula.
Untuk penggunaan production, disarankan menambahkan prepared statement agar lebih aman dari SQL Injection.
