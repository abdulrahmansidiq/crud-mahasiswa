<?php include 'config.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if ($_POST) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id");
    header("Location: index.php");
}
?>
<h2>Edit Mahasiswa</h2>
<form method="post">
    Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>
    NIM: <input type="text" name="nim" value="<?= $row['nim'] ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>"><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>
