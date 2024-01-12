<?php
// Koneksi ke basis data MySQL
$koneksi = new mysqli('localhost', 'nama_pengguna', 'kata_sandi', 'nama_database');

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke basis data gagal: " . $koneksi->connect_error);
}

// Ambil data dari basis data
$query = "SELECT * FROM nama_tabel";
$result = $koneksi->query($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Data dari MySQL</title>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
    </tr>
    <?php
    // Tampilkan data dari hasil query
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['deskripsi'] . "</td>";
        echo "<td>" . $row['harga'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
