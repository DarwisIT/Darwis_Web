<!doctype html>
<html>
<head>
    <title>Hasil Pengisian Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .success-message {
            text-align: center;
            color: #28a745; /* Warna hijau */
            font-size: 24px; /* Ukuran font lebih besar */
            margin: 20px 0; /* Margin atas dan bawah */
            font-weight: bold; /* Tebal */
        }
    </style>
</head>
<body>
    <h1 class="success-message">Data Berhasil Disimpan</h1> <!-- Menggunakan kelas CSS untuk gaya -->
    <table>
        <tr>
            <th>Label</th>
            <th>Data</th>
        </tr>
        <?php
        if (isset($_POST['btnSimpan'])) {
            $nama = $_POST['nama_lengkap'];
            $nim = $_POST['nim'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jurusan = $_POST['jurusan'];
            $no_hp = $_POST['no_hp'];
            $alamat = $_POST['alamat'];

            echo "<tr><td>Nama Lengkap</td><td>" . htmlspecialchars($nama) . "</td></tr>";
            echo "<tr><td>NIM</td><td>" . htmlspecialchars($nim) . "</td></tr>";
            echo "<tr><td>Tanggal Lahir</td><td>" . htmlspecialchars($tanggal_lahir) . "</td></tr>";
            echo "<tr><td>Jurusan</td><td>" . htmlspecialchars($jurusan) . "</td></tr>";
            echo "<tr><td>No HP</td><td>" . htmlspecialchars($no_hp) . "</td></tr>";
            echo "<tr><td>Alamat</td><td>" . htmlspecialchars($alamat) . "</td></tr>";
        } else {
            echo "<tr><td colspan='2'>Data tidak ditemukan.</td></tr>";
        }
        ?>
    </table>
</body>
</html>