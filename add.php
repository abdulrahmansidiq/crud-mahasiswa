<?php include 'config.php';

if ($_POST) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')");
    header("Location: index.php");
}
?>
<h2>Tambah Mahasiswa</h2>
<form method="post">
    Nama: <input type="text" name="nama" required><br>
    NIM: <input type="text" name="nim" required><br>
    Jurusan: <input type="text" name="jurusan" required><br>
    <button type="submit">Simpan</button>
</form>
<a href="index.php">Kembali</a>
