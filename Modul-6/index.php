<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h2>Daftar Karyawan Perusahaan</h2>
    <a href="form_tambah.php">Tambah Karyawan Baru</a>
    <br><br>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php'; // Menyertakan file koneksi
            
            if (!isset($conn)) {
                echo "<tr><td colspan='5'>Gagal menghubungkan ke database.</td></tr>";
            } else {
                $sql = "SELECT id, nama, jabatan, email FROM karyawan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Loop untuk menampilkan setiap baris data
                    while ($row = $result->fetch_assoc()) {
                        $id = htmlspecialchars($row["id"]);
                        $nama = htmlspecialchars($row["nama"]);
                        $jabatan = htmlspecialchars($row["jabatan"]);
                        $email = htmlspecialchars($row["email"]);
                        
                        echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $nama . "</td>";
                        echo "<td>" . $jabatan . "</td>";
                        echo "<td>" . $email . "</td>";
                        echo "<td>
                            <a href='form_edit.php?id=" . $id . "'>Edit</a> |
                            <a href='hapus.php?id=" . $id . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data karyawan.</td></tr>";
                }

                $conn->close();
            }
            ?>
        </tbody>
    </table>
</body>
</html>