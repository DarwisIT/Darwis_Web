<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(73, 250, 3);
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(253, 3, 3, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical; /* Memungkinkan pengguna untuk mengubah ukuran textarea secara vertikal */
        }
        input[type="reset"],
        input[type="submit"] {
            background-color:rgba(255, 3, 3, 0.14);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }
        input[type="reset"]:hover,
        input[type="submit"]:hover {
            background-color: #218838;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pengisian Data</h1>
        <form action="hasil.php" method="POST">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required>

            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" id="tanggal_lahir" name="tanggal_lahir" required class="datepicker">

            <label for="jurusan">Jurusan</label>
            <select id="jurusan" name="jurusan" required>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Sumber Daya Akuatik">Sumber Daya Akuatik</option>
                <option value="Agroteknologi">Agroteknologi</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
            </select>

            <label for="no_hp">No HP</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4" required></textarea>

            <input type="reset" name="reset" value="Reset">
            <input type="submit" name="btnSimpan" value="Simpan">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script