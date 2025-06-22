<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="add.php">+ Tambah Mahasiswa</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($row = mysqli_fetch_array($data)) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['nim']}</td>
                    <td>{$row['jurusan']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Yakin?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
